<?php

declare(strict_types=1);

namespace DataBase\migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231224153905 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $complaints_suggestions = $schema->getTable("complaints_suggestions");
        $complaints_suggestions->addColumn("user_id",Types::BIGINT);

        $users = $schema->getTable("users");
        $complaints_suggestions->addForeignKeyConstraint(
            $users,
            ["user_id"],
            ["id"],
            ["onUpdate" => "CASCADE","onDelete" => "CASCADE"]
        );

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
