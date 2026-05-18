# Déploiement — Vite & Gourmand

## URL de production
https://ecf-mac-imac-production.up.railway.app

## Plateforme
Railway.app (PaaS) — Plan Hobby

## Services déployés
- **PHP 8.2** — Application Symfony 7
- **MySQL** — Base de données relationnelle (compatible MariaDB)
- **MongoDB** — Base de données documents (statistiques commandes)

## Variables d'environnement production
| Variable | Description |
|----------|-------------|
| APP_ENV | prod |
| APP_DEBUG | 0 |
| APP_SECRET | Clé secrète 32 octets |
| DATABASE_URL | URL MySQL Railway |
| MONGODB_URI | URL MongoDB Railway |
| MONGODB_DB | vite_gourmand |

## Procédure de déploiement
1. `git push origin main` déclenche automatiquement un déploiement Railway
2. Railway lit le Dockerfile et construit l'image PHP 8.2
3. Le script `start.sh` lance composer install puis le serveur PHP
4. Les variables d'environnement sont injectées par Railway

## Import de la base de données
```bash
mysql -h ballast.proxy.rlwy.net -P 26702 -u root -p railway < database/database.sql
```

## Auteur
Noureddine Zerrouki — ECF DWWM 2026
