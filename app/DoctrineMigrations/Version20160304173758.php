<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160304173758 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE watches ADD condition_id INT NOT NULL');
        $this->addSql('ALTER TABLE watches ADD CONSTRAINT FK_C588D63A887793B6 FOREIGN KEY (condition_id) REFERENCES watch_conditions (id)');
        $this->addSql('CREATE INDEX IDX_C588D63A887793B6 ON watches (condition_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE watches DROP FOREIGN KEY FK_C588D63A887793B6');
        $this->addSql('DROP INDEX IDX_C588D63A887793B6 ON watches');
        $this->addSql('ALTER TABLE watches DROP condition_id');
    }
}
