<?php

declare(strict_types=1);

namespace DataBase\migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231223190754 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $users = $schema->createTable("users");

        $users->addColumn("id",Types::BIGINT)->setAutoincrement(true);
        $users->setPrimaryKey(['id']);

        $users->addColumn("username",Types::STRING)->setLength("255");
        $users->addColumn("phone_number",Types::STRING)->setLength("100");
        $users->addColumn("password",Types::STRING)->setLength("255");


    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
