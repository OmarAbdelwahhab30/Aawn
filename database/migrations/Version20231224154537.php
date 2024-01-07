<?php

declare(strict_types=1);

namespace DataBase\migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231224154537 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $reports = $schema->getTable("reports");
        $reports->addColumn("user_id",Types::BIGINT);
        $reports->addColumn("specialization_id",Types::SMALLINT);


        $users = $schema->getTable("users");
        $specializations = $schema->getTable("admin_specialization");

        $reports->addForeignKeyConstraint(
            $users,
            ["user_id"],
            ["id"],
            ["onUpdate" => "CASCADE","onDelete" => "CASCADE"]
        );

        $reports->addForeignKeyConstraint(
            $specializations,
            ["specialization_id"],
            ["id"],
            ["onUpdate" => "CASCADE","onDelete" => "CASCADE"]
        );

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
