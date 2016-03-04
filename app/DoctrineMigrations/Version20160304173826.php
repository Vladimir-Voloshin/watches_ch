<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160304173826 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<SQL
INSERT INTO `brands` (`id`, `name`, `updated`, `created`) VALUES
(1, 'Rolex', NULL, '2016-03-4 14:50:29'),
(2, 'A. Lange & Söhne', NULL, '2016-03-4 14:50:29'),
(3, 'IWC', NULL, '2016-03-4 14:50:29'),
(4, 'Breitling', NULL, '2016-03-4 14:50:29');
INSERT INTO `case_materials` (`id`, `name`, `updated`, `created`) VALUES
(1, 'steel', NULL, '2016-03-4 14:50:29'),
(2, 'titan', NULL, '2016-03-4 14:50:29'),
(3, 'ceramic', NULL, '2016-03-4 14:50:29');
INSERT INTO `watch_functions` (`id`, `name`, `updated`, `created`) VALUES
(1, 'chronograph', NULL, '2016-03-4 14:50:29'),
(2, 'date', NULL, '2016-03-4 14:50:29'),
(4, 'small second', NULL, '2016-03-4 14:50:29'),
(5, 'moonphase', NULL, '2016-03-4 14:50:29'),
(6, 'day date', NULL, '2016-03-4 14:50:29'),
(7, 'perpetual calendar', NULL, '2016-03-4 14:50:29');
INSERT INTO `watch_conditions` (`id`, `name`, `updated`, `created`) VALUES
(1, 'new', NULL, '2016-03-4 14:50:29'),
(2, 'aaa', NULL, '2016-03-4 14:50:29'),
(4, 'aa', NULL, '2016-03-4 14:50:29'),
(5, 'a', NULL, '2016-03-4 14:50:29'),
(6, 'vintage', NULL, '2016-03-4 14:50:29');
SQL
        );

    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DELETE FROM `brands` WHERE 1');
        $this->addSql('DELETE FROM `case_materials` WHERE 1');
        $this->addSql('DELETE FROM `watch_functions` WHERE 1');
        $this->addSql('DELETE FROM `watch_conditions` WHERE 1');
    }
}
