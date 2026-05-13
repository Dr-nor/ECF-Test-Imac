<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260513193152 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY `commande_ibfk_1`');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY `commande_ibfk_2`');
        $this->addSql('DROP INDEX user_id ON commande');
        $this->addSql('DROP INDEX menu_id ON commande');
        $this->addSql('DROP INDEX numero_commande ON commande');
        $this->addSql('ALTER TABLE commande DROP user_id, DROP menu_id, CHANGE statut statut VARCHAR(20) NOT NULL');
        $this->addSql('ALTER TABLE horaire CHANGE ferme ferme TINYINT NOT NULL');
        $this->addSql('ALTER TABLE menu CHANGE quantite_restante quantite_restante INT DEFAULT NULL, CHANGE theme theme VARCHAR(50) DEFAULT NULL, CHANGE regime regime VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE plat DROP FOREIGN KEY `plat_ibfk_1`');
        $this->addSql('DROP INDEX menu_id ON plat');
        $this->addSql('ALTER TABLE plat DROP menu_id, CHANGE photo photo VARCHAR(255) DEFAULT NULL');
        $this->addSql('DROP INDEX email ON user');
        $this->addSql('ALTER TABLE user DROP email, DROP password, DROP role_id, CHANGE actif actif TINYINT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande ADD user_id INT NOT NULL, ADD menu_id INT NOT NULL, CHANGE statut statut VARCHAR(20) DEFAULT \'\'\'en_attente\'\'\'');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (menu_id) REFERENCES menu (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX user_id ON commande (user_id)');
        $this->addSql('CREATE INDEX menu_id ON commande (menu_id)');
        $this->addSql('CREATE UNIQUE INDEX numero_commande ON commande (numero_commande)');
        $this->addSql('ALTER TABLE horaire CHANGE ferme ferme TINYINT DEFAULT 0');
        $this->addSql('ALTER TABLE menu CHANGE quantite_restante quantite_restante INT DEFAULT 10, CHANGE theme theme VARCHAR(50) DEFAULT \'\'\'classique\'\'\', CHANGE regime regime VARCHAR(50) DEFAULT \'\'\'classique\'\'\'');
        $this->addSql('ALTER TABLE plat ADD menu_id INT NOT NULL, CHANGE photo photo VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE plat ADD CONSTRAINT `plat_ibfk_1` FOREIGN KEY (menu_id) REFERENCES menu (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX menu_id ON plat (menu_id)');
        $this->addSql('ALTER TABLE user ADD email VARCHAR(180) NOT NULL, ADD password VARCHAR(255) NOT NULL, ADD role_id INT DEFAULT 2, CHANGE actif actif TINYINT DEFAULT 1');
        $this->addSql('CREATE UNIQUE INDEX email ON user (email)');
    }
}
