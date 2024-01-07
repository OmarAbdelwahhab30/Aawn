<?php

declare(strict_types=1);

namespace DataBase\migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231224154022 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $replies = $schema->getTable("replies");
        $replies->addColumn("complaint_suggestion_id",Types::BIGINT);

        $complaints_suggestions = $schema->getTable("complaints_suggestions");

        $replies->addForeignKeyConstraint(
            $complaints_suggestions,
            ["complaint_suggestion_id"],
            ["id"],
            ["onUpdate" => "CASCADE","onDelete" => "CASCADE"]
        );

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
