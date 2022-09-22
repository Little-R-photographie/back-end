<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220922092644 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rendez_vous_prestation (rendez_vous_id INT NOT NULL, prestation_id INT NOT NULL, INDEX IDX_77B3306591EF7EAA (rendez_vous_id), INDEX IDX_77B330659E45C554 (prestation_id), PRIMARY KEY(rendez_vous_id, prestation_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rendez_vous_prestation ADD CONSTRAINT FK_77B3306591EF7EAA FOREIGN KEY (rendez_vous_id) REFERENCES rendez_vous (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rendez_vous_prestation ADD CONSTRAINT FK_77B330659E45C554 FOREIGN KEY (prestation_id) REFERENCES prestation (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rendez_vous_prestation DROP FOREIGN KEY FK_77B3306591EF7EAA');
        $this->addSql('ALTER TABLE rendez_vous_prestation DROP FOREIGN KEY FK_77B330659E45C554');
        $this->addSql('DROP TABLE rendez_vous_prestation');
    }
}
