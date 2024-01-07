<?php

declare(strict_types=1);

namespace DataBase\migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231224001339 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $admins = $schema->createTable("admins");

        $admins->addColumn("id",Types::BIGINT)->setAutoincrement(true);
        $admins->setPrimaryKey(['id']);

        $admins->addColumn("username",Types::STRING)->setLength("255");
        $admins->addColumn("email",Types::STRING)->setLength("100");
        $admins->addColumn("password",Types::STRING)->setLength("255");

        $admins->addUniqueIndex(['email']);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
