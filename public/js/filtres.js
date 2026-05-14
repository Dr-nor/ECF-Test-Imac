/**
 * filtres.js — Vite & Gourmand
 * Filtrage AJAX des menus sans rechargement de page
 * Fetch API native — Phase 5 ECF DWWM 2026
 */

document.addEventListener('DOMContentLoaded', function () {

    // =============================================
    // 1. RÉCUPÉRATION DES ÉLÉMENTS DU DOM
    // =============================================
    // On attend que le DOM soit chargé avant de
    // chercher les éléments — sinon ils n'existent
    // pas encore et getElementById retourne null

    const filtreTheme       = document.getElementById('filtre-theme');
    const filtrePrix        = document.getElementById('filtre-prix');
    const filtreRegime      = document.getElementById('filtre-regime');
    const filtreThemeMobile = document.getElementById('filtre-theme-mobile');
    const filtrePrixMobile  = document.getElementById('filtre-prix-mobile');
    const btnReinit         = document.getElementById('btn-reinitialiser');
    const btnMobile         = document.getElementById('btn-filtrer-mobile');
    const menusContainer    = document.getElementById('menus-container');
    const spinner           = document.getElementById('loading-spinner');
    const resultsCount      = document.getElementById('results-count');
    const triSelect         = document.getElementById('tri-select');

    // =============================================
    // 2. ÉCOUTEURS D'ÉVÉNEMENTS
    // =============================================
    // On déclenche le filtrage à chaque changement
    // de valeur dans les selects desktop

    if (filtreTheme)       filtreTheme.addEventListener('change', filtrerMenus);
    if (filtrePrix)        filtrePrix.addEventListener('change', filtrerMenus);
    if (filtreRegime)      filtreRegime.addEventListener('change', filtrerMenus);
    if (triSelect)         triSelect.addEventListener('change', filtrerMenus);

    // Bouton mobile — déclenche le filtrage
    if (btnMobile) btnMobile.addEventListener('click', filtrerMenus);

    // Bouton réinitialiser — remet tout à zéro
    if (btnReinit) btnReinit.addEventListener('click', function () {
        if (filtreTheme)       filtreTheme.value       = '';
        if (filtrePrix)        filtrePrix.value        = '';
        if (filtreRegime)      filtreRegime.value      = '';
        if (filtreThemeMobile) filtreThemeMobile.value = '';
        if (filtrePrixMobile)  filtrePrixMobile.value  = '';
        filtrerMenus();
    });

    // =============================================
    // 3. FONCTION PRINCIPALE — FETCH AJAX
    // =============================================

    async function filtrerMenus() {

        // -- Récupérer les valeurs des filtres --
        const theme  = filtreTheme  ? filtreTheme.value  : '';
        const prix   = filtrePrix   ? filtrePrix.value   : '';
        const regime = filtreRegime ? filtreRegime.value : '';

        // -- Construire l'URL avec les paramètres --
        // Ex: /menus/api/menus?theme=noel&prix=50&regime=vegetarien
        const params = new URLSearchParams();
        if (theme)  params.append('theme', theme);
        if (prix)   params.append('prix', prix);
        if (regime) params.append('regime', regime);

        const url = '/menus/api/menus?' + params.toString();

        // -- Afficher le spinner, cacher les cartes --
        if (spinner)        spinner.classList.remove('d-none');
        if (menusContainer) menusContainer.style.opacity = '0.3';

        try {
            // -- Requête AJAX vers l'API Symfony --
            // fetch() envoie la requête en arrière-plan
            // await attend la réponse sans bloquer la page
            const response = await fetch(url);

            // Vérifier que la requête a réussi (code 200)
            if (!response.ok) {
                throw new Error('Erreur réseau : ' + response.status);
            }

            // Convertir la réponse JSON en tableau JS
            const menus = await response.json();

            // -- Tri côté client si demandé --
            if (triSelect && triSelect.value === 'prix_desc') {
                menus.sort((a, b) => b.prix - a.prix);
            } else if (triSelect && triSelect.value === 'titre') {
                menus.sort((a, b) => a.titre.localeCompare(b.titre));
            }

            // -- Mettre à jour le compteur --
            if (resultsCount) {
                resultsCount.textContent = menus.length + ' menu' + (menus.length > 1 ? 's' : '');
            }

            // -- Vider le conteneur et injecter les nouvelles cartes --
            if (menusContainer) {
                if (menus.length === 0) {
                    // Aucun résultat — message d'information
                    menusContainer.innerHTML = `
                        <div class="col-12 text-center py-5">
                            <div style="font-size:3rem;">🔍</div>
                            <h4 class="mt-3">Aucun menu ne correspond à vos critères</h4>
                            <p class="text-muted">Essayez de modifier vos filtres</p>
                        </div>`;
                } else {
                    // Générer une carte Bootstrap pour chaque menu
                    menusContainer.innerHTML = menus.map(menu => `
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="menu-card">
                                <div class="menu-card-img theme-${menu.theme || 'default'}">
                                    ${getEmoji(menu.theme)}
                                    <span class="menu-card-badge ${menu.disponible ? '' : 'complet'}">
                                        ${menu.disponible ? '✓ Disponible' : '✗ Complet'}
                                    </span>
                                </div>
                                <div class="menu-card-body">
                                    <div class="menu-card-theme">${(menu.theme || 'classique').toUpperCase()}</div>
                                    <h3 class="menu-card-title">${menu.titre}</h3>
                                    <p class="menu-card-desc">${menu.description || ''}</p>
                                    <div class="menu-card-footer">
                                        <span class="menu-card-price">${parseFloat(menu.prix).toFixed(2).replace('.', ',')} €</span>
                                        <a href="/menus/${menu.id}" class="btn-voir-menu">Voir le menu</a>
                                    </div>
                                </div>
                            </div>
                        </div>`
                    ).join('');
                }
            }

        } catch (error) {
            // En cas d'erreur réseau — afficher un message
            console.error('Erreur AJAX :', error);
            if (menusContainer) {
                menusContainer.innerHTML = `
                    <div class="col-12 text-center py-4">
                        <p class="text-danger">
                            <i class="bi bi-exclamation-triangle me-2"></i>
                            Erreur lors du chargement des menus.
                        </p>
                    </div>`;
            }
        } finally {
            // -- Toujours cacher le spinner à la fin --
            // finally s'exécute que la requête ait réussi ou échoué
            if (spinner)        spinner.classList.add('d-none');
            if (menusContainer) menusContainer.style.opacity = '1';
        }
    }

    // =============================================
    // 4. FONCTION UTILITAIRE — EMOJI PAR THÈME
    // =============================================

    function getEmoji(theme) {
        const emojis = {
            'noel':      '🎄',
            'evenement': '🥂',
            'paques':    '🥗',
            'corporate': '💼',
            'classique': '🍽️'
        };
        return emojis[theme] || '🍽️';
    }

});