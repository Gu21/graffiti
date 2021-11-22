<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211121230405 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oeuvres_categories (oeuvres_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_94B32FB4928CE22 (oeuvres_id), INDEX IDX_94B32FBA21214B7 (categories_id), PRIMARY KEY(oeuvres_id, categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE oeuvres_categories ADD CONSTRAINT FK_94B32FB4928CE22 FOREIGN KEY (oeuvres_id) REFERENCES oeuvres (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE oeuvres_categories ADD CONSTRAINT FK_94B32FBA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE oeuvres ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE oeuvres ADD CONSTRAINT FK_413EEE3EA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_413EEE3EA76ED395 ON oeuvres (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE oeuvres_categories DROP FOREIGN KEY FK_94B32FBA21214B7');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE oeuvres_categories');
        $this->addSql('ALTER TABLE oeuvres DROP FOREIGN KEY FK_413EEE3EA76ED395');
        $this->addSql('DROP INDEX IDX_413EEE3EA76ED395 ON oeuvres');
        $this->addSql('ALTER TABLE oeuvres DROP user_id');
    }
}
