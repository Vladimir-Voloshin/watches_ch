<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160304155027 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE case_materials (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, updated DATETIME DEFAULT NULL, created DATETIME NOT NULL, UNIQUE INDEX UNIQ_B534664E5E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE brands (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, updated DATETIME DEFAULT NULL, created DATETIME NOT NULL, UNIQUE INDEX UNIQ_7EA244345E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE watch_functions (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, updated DATETIME DEFAULT NULL, created DATETIME NOT NULL, UNIQUE INDEX UNIQ_797083FE5E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE watch_images (id INT AUTO_INCREMENT NOT NULL, path VARCHAR(255) NOT NULL, updated DATETIME DEFAULT NULL, created DATETIME NOT NULL, UNIQUE INDEX UNIQ_A75F42F6B548B0F (path), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE watches (id INT AUTO_INCREMENT NOT NULL, brand_id INT DEFAULT NULL, case_material_id INT DEFAULT NULL, model VARCHAR(64) NOT NULL, case_site INT DEFAULT NULL, bracelet VARCHAR(255) DEFAULT NULL, updated DATETIME DEFAULT NULL, created DATETIME NOT NULL, INDEX IDX_C588D63A44F5D008 (brand_id), INDEX IDX_C588D63A4445CB06 (case_material_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE crossWatchesWatchFunctions (watch_id INT NOT NULL, watch_function_id INT NOT NULL, INDEX IDX_17242709C7C58135 (watch_id), INDEX IDX_1724270970E0BF0D (watch_function_id), PRIMARY KEY(watch_id, watch_function_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE crossWatchesWatchImage (watch_id INT NOT NULL, watch_image_id INT NOT NULL, INDEX IDX_12780710C7C58135 (watch_id), INDEX IDX_12780710545A190C (watch_image_id), PRIMARY KEY(watch_id, watch_image_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE watches ADD CONSTRAINT FK_C588D63A44F5D008 FOREIGN KEY (brand_id) REFERENCES brands (id)');
        $this->addSql('ALTER TABLE watches ADD CONSTRAINT FK_C588D63A4445CB06 FOREIGN KEY (case_material_id) REFERENCES case_materials (id)');
        $this->addSql('ALTER TABLE crossWatchesWatchFunctions ADD CONSTRAINT FK_17242709C7C58135 FOREIGN KEY (watch_id) REFERENCES watches (id)');
        $this->addSql('ALTER TABLE crossWatchesWatchFunctions ADD CONSTRAINT FK_1724270970E0BF0D FOREIGN KEY (watch_function_id) REFERENCES watch_functions (id)');
        $this->addSql('ALTER TABLE crossWatchesWatchImage ADD CONSTRAINT FK_12780710C7C58135 FOREIGN KEY (watch_id) REFERENCES watches (id)');
        $this->addSql('ALTER TABLE crossWatchesWatchImage ADD CONSTRAINT FK_12780710545A190C FOREIGN KEY (watch_image_id) REFERENCES watch_images (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE watches DROP FOREIGN KEY FK_C588D63A4445CB06');
        $this->addSql('ALTER TABLE watches DROP FOREIGN KEY FK_C588D63A44F5D008');
        $this->addSql('ALTER TABLE crossWatchesWatchFunctions DROP FOREIGN KEY FK_1724270970E0BF0D');
        $this->addSql('ALTER TABLE crossWatchesWatchImage DROP FOREIGN KEY FK_12780710545A190C');
        $this->addSql('ALTER TABLE crossWatchesWatchFunctions DROP FOREIGN KEY FK_17242709C7C58135');
        $this->addSql('ALTER TABLE crossWatchesWatchImage DROP FOREIGN KEY FK_12780710C7C58135');
        $this->addSql('DROP TABLE case_materials');
        $this->addSql('DROP TABLE brands');
        $this->addSql('DROP TABLE watch_functions');
        $this->addSql('DROP TABLE watch_images');
        $this->addSql('DROP TABLE watches');
        $this->addSql('DROP TABLE crossWatchesWatchFunctions');
        $this->addSql('DROP TABLE crossWatchesWatchImage');
    }
}
