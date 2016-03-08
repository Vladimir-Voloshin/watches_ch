<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160308123736 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE watch_images ADD watch_id INT NOT NULL');
        $this->addSql('ALTER TABLE watch_images ADD CONSTRAINT FK_A75F42F6C7C58135 FOREIGN KEY (watch_id) REFERENCES watches (id)');
        $this->addSql('CREATE INDEX IDX_A75F42F6C7C58135 ON watch_images (watch_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE watch_images DROP FOREIGN KEY FK_A75F42F6C7C58135');
        $this->addSql('DROP INDEX IDX_A75F42F6C7C58135 ON watch_images');
        $this->addSql('ALTER TABLE watch_images DROP watch_id');
    }
}
