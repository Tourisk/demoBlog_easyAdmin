<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221003140714 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE voiture ADD typevoiture_id INT NOT NULL');
        $this->addSql('ALTER TABLE voiture ADD CONSTRAINT FK_E9E2810FF8DB48B7 FOREIGN KEY (typevoiture_id) REFERENCES type (id)');
        $this->addSql('CREATE INDEX IDX_E9E2810FF8DB48B7 ON voiture (typevoiture_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE voiture DROP FOREIGN KEY FK_E9E2810FF8DB48B7');
        $this->addSql('DROP INDEX IDX_E9E2810FF8DB48B7 ON voiture');
        $this->addSql('ALTER TABLE voiture DROP typevoiture_id');
    }
}
