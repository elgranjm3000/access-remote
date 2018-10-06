<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181005203303 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contratar DROP FOREIGN KEY FK_508BCA049FC17F54');
        $this->addSql('DROP TABLE contratar');
        $this->addSql('DROP TABLE servicios');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE contratar (id INT AUTO_INCREMENT NOT NULL, idservicios_id INT DEFAULT NULL, detalles LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, fecha DATE NOT NULL, lugar VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, pagar DOUBLE PRECISION NOT NULL, nombre VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, telefono VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, correo VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, INDEX IDX_508BCA049FC17F54 (idservicios_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE servicios (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, icono VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contratar ADD CONSTRAINT FK_508BCA049FC17F54 FOREIGN KEY (idservicios_id) REFERENCES servicios (id)');
    }
}
