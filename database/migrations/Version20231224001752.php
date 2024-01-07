<?php

declare(strict_types=1);

namespace DataBase\migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231224001752 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $admin_specialization = $schema->createTable("admin_specialization");

        $admin_specialization->addColumn("id",Types::SMALLINT)->setAutoincrement(true);
        $admin_specialization->setPrimaryKey(['id']);

        $admin_specialization->addColumn("specialization",Types::STRING)->setLength("255");
        $admin_specialization->addColumn("information",Types::TEXT);

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
