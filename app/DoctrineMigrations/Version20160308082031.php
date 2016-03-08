<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160308082031 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE watches ADD slug VARCHAR(128) NOT NULL');
        $this->addSql('DROP TABLE crossWatchesWatchImage');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE watches DROP slug');
        $this->addSql('CREATE TABLE crossWatchesWatchImage (watch_id INT NOT NULL, watch_image_id INT NOT NULL, INDEX IDX_12780710C7C58135 (watch_id), INDEX IDX_12780710545A190C (watch_image_id), PRIMARY KEY(watch_id, watch_image_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE crossWatchesWatchImage ADD CONSTRAINT FK_12780710545A190C FOREIGN KEY (watch_image_id) REFERENCES watch_images (id)');
        $this->addSql('ALTER TABLE crossWatchesWatchImage ADD CONSTRAINT FK_12780710C7C58135 FOREIGN KEY (watch_id) REFERENCES watches (id)');
    }
}
