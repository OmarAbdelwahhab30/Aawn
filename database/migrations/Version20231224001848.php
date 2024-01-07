<?php

declare(strict_types=1);

namespace DataBase\migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231224001848 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $complaints_suggestions = $schema->createTable("complaints_suggestions");

        $complaints_suggestions->addColumn("id",Types::BIGINT)->setAutoincrement(true);
        $complaints_suggestions->setPrimaryKey(['id']);

        $complaints_suggestions->addColumn("description",Types::TEXT);
        $complaints_suggestions->addColumn("attachment",Types::STRING)->setLength("255");
        $complaints_suggestions->addColumn("location",Types::STRING)->setLength("255");
        $complaints_suggestions->addColumn("date",Types::DATE_MUTABLE);

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
