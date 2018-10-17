<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181017041654 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE detalles_factura (id INT AUTO_INCREMENT NOT NULL, idproducto_id INT DEFAULT NULL, idfactura_id INT DEFAULT NULL, cantidad INT NOT NULL, orden_promocion VARCHAR(255) NOT NULL, comentarios LONGTEXT NOT NULL, precio DOUBLE PRECISION NOT NULL, total DOUBLE PRECISION NOT NULL, INDEX IDX_3123C5F7B0841921 (idproducto_id), INDEX IDX_3123C5F73DE66465 (idfactura_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE detalles_factura ADD CONSTRAINT FK_3123C5F7B0841921 FOREIGN KEY (idproducto_id) REFERENCES productos (id)');
        $this->addSql('ALTER TABLE detalles_factura ADD CONSTRAINT FK_3123C5F73DE66465 FOREIGN KEY (idfactura_id) REFERENCES facturas (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE detalles_factura');
    }
}
