<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231106162544 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add an updated_at field in the property table';
    }

    public function up(Schema $schema): void
    {
        // We set a default CURRENT_TIMESTAMP for existing rows
        $this->addSql('ALTER TABLE property ADD updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT \'(DC2Type:datetime_immutable)\'');
        // Then we update the column to remove the default as we don't want future rows to have a default value
        $this->addSql('ALTER TABLE property ALTER COLUMN updated_at DROP DEFAULT');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE property DROP updated_at');
    }
}
