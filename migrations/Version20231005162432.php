<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231005162432 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add surface, rooms, bedrooms, floor, price, heating, city, address, postal_code, sold and created_at fields at the property fields';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE property ADD surface INT NOT NULL, ADD rooms INT NOT NULL, ADD bedrooms INT NOT NULL, ADD floor INT NOT NULL, ADD price INT NOT NULL, ADD heating INT NOT NULL, ADD city VARCHAR(255) NOT NULL, ADD address VARCHAR(255) NOT NULL, ADD postal_code VARCHAR(255) NOT NULL, ADD sold TINYINT(1) DEFAULT 0 NOT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE property DROP surface, DROP rooms, DROP bedrooms, DROP floor, DROP price, DROP heating, DROP city, DROP address, DROP postal_code, DROP sold, DROP created_at');
    }
}
