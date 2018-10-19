<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181019231016 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE movimientos_almacen (id INT AUTO_INCREMENT NOT NULL, id_producto_id INT NOT NULL, destino_id INT NOT NULL, origen_id INT DEFAULT NULL, id_cliente_id INT DEFAULT NULL, cantidad INT NOT NULL, status TINYINT(1) DEFAULT NULL, fecha DATE NOT NULL, comentarios VARCHAR(255) DEFAULT NULL, INDEX IDX_9D44A9736E57A479 (id_producto_id), INDEX IDX_9D44A973E4360615 (destino_id), INDEX IDX_9D44A97393529ECD (origen_id), INDEX IDX_9D44A9737BF9CE86 (id_cliente_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE movimientos_almacen ADD CONSTRAINT FK_9D44A9736E57A479 FOREIGN KEY (id_producto_id) REFERENCES productos (id)');
        $this->addSql('ALTER TABLE movimientos_almacen ADD CONSTRAINT FK_9D44A973E4360615 FOREIGN KEY (destino_id) REFERENCES almacen (id)');
        $this->addSql('ALTER TABLE movimientos_almacen ADD CONSTRAINT FK_9D44A97393529ECD FOREIGN KEY (origen_id) REFERENCES almacen (id)');
        $this->addSql('ALTER TABLE movimientos_almacen ADD CONSTRAINT FK_9D44A9737BF9CE86 FOREIGN KEY (id_cliente_id) REFERENCES clientes (id)');
        $this->addSql('ALTER TABLE almacen CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE clientes CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE clientes ADD CONSTRAINT FK_50FE07D77EB2C349 FOREIGN KEY (id_usuario_id) REFERENCES app_users (id)');
        $this->addSql('CREATE INDEX IDX_50FE07D77EB2C349 ON clientes (id_usuario_id)');
        $this->addSql('ALTER TABLE detalles_factura CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE detalles_factura ADD CONSTRAINT FK_3123C5F7B0841921 FOREIGN KEY (idproducto_id) REFERENCES productos (id)');
        $this->addSql('ALTER TABLE detalles_factura ADD CONSTRAINT FK_3123C5F73DE66465 FOREIGN KEY (idfactura_id) REFERENCES facturas (id)');
        $this->addSql('CREATE INDEX IDX_3123C5F7B0841921 ON detalles_factura (idproducto_id)');
        $this->addSql('CREATE INDEX IDX_3123C5F73DE66465 ON detalles_factura (idfactura_id)');
        $this->addSql('ALTER TABLE facturas CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE facturas ADD CONSTRAINT FK_622B9C0F13DA536B FOREIGN KEY (idcliente_id) REFERENCES clientes (id)');
        $this->addSql('CREATE INDEX IDX_622B9C0F13DA536B ON facturas (idcliente_id)');
        $this->addSql('ALTER TABLE familia CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE movimientos_depositos CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE movimientos_depositos ADD CONSTRAINT FK_93F425AA1C55BE39 FOREIGN KEY (facturas_id) REFERENCES facturas (id)');
        $this->addSql('CREATE INDEX IDX_93F425AA1C55BE39 ON movimientos_depositos (facturas_id)');
        $this->addSql('ALTER TABLE productos CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE productos ADD CONSTRAINT FK_767490E61D8C7E99 FOREIGN KEY (idfamilia_id) REFERENCES familia (id)');
        $this->addSql('ALTER TABLE productos ADD CONSTRAINT FK_767490E681FC99F1 FOREIGN KEY (idmedidas_id) REFERENCES medidas (id)');
        $this->addSql('CREATE INDEX IDX_767490E61D8C7E99 ON productos (idfamilia_id)');
        $this->addSql('CREATE INDEX IDX_767490E681FC99F1 ON productos (idmedidas_id)');
        $this->addSql('ALTER TABLE proveedores CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE medidas CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE app_users CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C2502824F85E0677 ON app_users (username)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C2502824E7927C74 ON app_users (email)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE movimientos_almacen');
        $this->addSql('ALTER TABLE almacen CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE app_users MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX UNIQ_C2502824F85E0677 ON app_users');
        $this->addSql('DROP INDEX UNIQ_C2502824E7927C74 ON app_users');
        $this->addSql('ALTER TABLE app_users DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE app_users CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE clientes MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE clientes DROP FOREIGN KEY FK_50FE07D77EB2C349');
        $this->addSql('DROP INDEX IDX_50FE07D77EB2C349 ON clientes');
        $this->addSql('ALTER TABLE clientes DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE clientes CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE detalles_factura MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE detalles_factura DROP FOREIGN KEY FK_3123C5F7B0841921');
        $this->addSql('ALTER TABLE detalles_factura DROP FOREIGN KEY FK_3123C5F73DE66465');
        $this->addSql('DROP INDEX IDX_3123C5F7B0841921 ON detalles_factura');
        $this->addSql('DROP INDEX IDX_3123C5F73DE66465 ON detalles_factura');
        $this->addSql('ALTER TABLE detalles_factura DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE detalles_factura CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE facturas MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE facturas DROP FOREIGN KEY FK_622B9C0F13DA536B');
        $this->addSql('DROP INDEX IDX_622B9C0F13DA536B ON facturas');
        $this->addSql('ALTER TABLE facturas DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE facturas CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE familia MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE familia DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE familia CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE medidas MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE medidas DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE medidas CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE movimientos_depositos MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE movimientos_depositos DROP FOREIGN KEY FK_93F425AA1C55BE39');
        $this->addSql('DROP INDEX IDX_93F425AA1C55BE39 ON movimientos_depositos');
        $this->addSql('ALTER TABLE movimientos_depositos DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE movimientos_depositos CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE productos MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE productos DROP FOREIGN KEY FK_767490E61D8C7E99');
        $this->addSql('ALTER TABLE productos DROP FOREIGN KEY FK_767490E681FC99F1');
        $this->addSql('DROP INDEX IDX_767490E61D8C7E99 ON productos');
        $this->addSql('DROP INDEX IDX_767490E681FC99F1 ON productos');
        $this->addSql('ALTER TABLE productos DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE productos CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE proveedores MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE proveedores DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE proveedores CHANGE id id INT NOT NULL');
    }
}
