<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181030141406 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE productos CHANGE nombre nombre VARCHAR(255) DEFAULT NULL, CHANGE costo costo DOUBLE PRECISION DEFAULT NULL, CHANGE precio_venta precio_venta DOUBLE PRECISION DEFAULT NULL, CHANGE comentarios comentarios LONGTEXT DEFAULT NULL, CHANGE cantidad_presentacion cantidad_presentacion VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE productos CHANGE nombre nombre VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE costo costo DOUBLE PRECISION NOT NULL, CHANGE precio_venta precio_venta DOUBLE PRECISION NOT NULL, CHANGE comentarios comentarios LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE cantidad_presentacion cantidad_presentacion VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
