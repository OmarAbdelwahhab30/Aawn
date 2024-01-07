<?php

declare(strict_types=1);

namespace DataBase\migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231224002108 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $reports = $schema->createTable("reports");

        $reports->addColumn("id",Types::INTEGER)->setAutoincrement(true);
        $reports->setPrimaryKey(['id']);

        $reports->addColumn("description",Types::TEXT);
        $reports->addColumn("date_reported",Types::DATE_MUTABLE);
        $reports->addColumn("status",Types::STRING);
        $reports->addColumn("location",Types::STRING)->setLength("255");
        $reports->addColumn("attachment",Types::STRING)->setLength("255");

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
