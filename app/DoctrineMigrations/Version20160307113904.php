<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160307113904 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX UNIQ_B534664E5E237E06 ON case_materials');
        $this->addSql('ALTER TABLE case_materials CHANGE name material_name VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B534664EA4B1333 ON case_materials (material_name)');
        $this->addSql('DROP INDEX UNIQ_A7EF46375E237E06 ON watch_conditions');
        $this->addSql('ALTER TABLE watch_conditions CHANGE name condition_name VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A7EF4637ECD72B27 ON watch_conditions (condition_name)');
        $this->addSql('DROP INDEX UNIQ_7EA244345E237E06 ON brands');
        $this->addSql('ALTER TABLE brands CHANGE name brand_name VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7EA24434794474B9 ON brands (brand_name)');
        $this->addSql('DROP INDEX UNIQ_797083FE5E237E06 ON watch_functions');
        $this->addSql('ALTER TABLE watch_functions CHANGE name function_name VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_797083FECD3635C7 ON watch_functions (function_name)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX UNIQ_7EA24434794474B9 ON brands');
        $this->addSql('ALTER TABLE brands CHANGE brand_name name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7EA244345E237E06 ON brands (name)');
        $this->addSql('DROP INDEX UNIQ_B534664EA4B1333 ON case_materials');
        $this->addSql('ALTER TABLE case_materials CHANGE material_name name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B534664E5E237E06 ON case_materials (name)');
        $this->addSql('DROP INDEX UNIQ_A7EF4637ECD72B27 ON watch_conditions');
        $this->addSql('ALTER TABLE watch_conditions CHANGE condition_name name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A7EF46375E237E06 ON watch_conditions (name)');
        $this->addSql('DROP INDEX UNIQ_797083FECD3635C7 ON watch_functions');
        $this->addSql('ALTER TABLE watch_functions CHANGE function_name name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_797083FE5E237E06 ON watch_functions (name)');
    }
}
