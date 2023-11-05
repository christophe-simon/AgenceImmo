<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231023204407 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Change roles management (JSON instead of fields in a table) and change first name and last name typo';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_roles DROP FOREIGN KEY FK_54FCD59FA76ED395');
        $this->addSql('ALTER TABLE user_roles DROP FOREIGN KEY FK_54FCD59FD60322AC');
        $this->addSql('DROP TABLE user_roles');
        $this->addSql('ALTER TABLE user ADD first_name VARCHAR(255) NOT NULL, ADD last_name VARCHAR(255) NOT NULL, ADD roles JSON NOT NULL COMMENT \'(DC2Type:json)\', DROP firstname, DROP lastname, CHANGE username username VARCHAR(180) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649F85E0677 ON user (username)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_roles (user_id INT NOT NULL, role_id INT NOT NULL, INDEX IDX_54FCD59FA76ED395 (user_id), INDEX IDX_54FCD59FD60322AC (role_id), PRIMARY KEY(user_id, role_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE user_roles ADD CONSTRAINT FK_54FCD59FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_roles ADD CONSTRAINT FK_54FCD59FD60322AC FOREIGN KEY (role_id) REFERENCES role (id) ON DELETE CASCADE');
        $this->addSql('DROP INDEX UNIQ_8D93D649F85E0677 ON user');
        $this->addSql('ALTER TABLE user ADD firstname VARCHAR(255) NOT NULL, ADD lastname VARCHAR(255) NOT NULL, DROP first_name, DROP last_name, DROP roles, CHANGE username username VARCHAR(255) NOT NULL');
    }
}
