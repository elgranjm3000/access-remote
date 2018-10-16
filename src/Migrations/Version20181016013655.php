<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181016013655 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE almacen (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, comentarios LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE facturas (id INT AUTO_INCREMENT NOT NULL, movimientos_depositos_id INT DEFAULT NULL, recibo_caja VARCHAR(255) NOT NULL, orden_compra VARCHAR(255) NOT NULL, fecha DATE NOT NULL, comentarios VARCHAR(255) NOT NULL, INDEX IDX_622B9C0FE08DFBF7 (movimientos_depositos_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE movimientos_depositos (id INT AUTO_INCREMENT NOT NULL, fecha_movimiento DATE NOT NULL, monto DOUBLE PRECISION NOT NULL, banco VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE facturas ADD CONSTRAINT FK_622B9C0FE08DFBF7 FOREIGN KEY (movimientos_depositos_id) REFERENCES movimientos_depositos (id)');
        $this->addSql('DROP TABLE suscripcion');
        $this->addSql('ALTER TABLE clientes ADD CONSTRAINT FK_50FE07D77EB2C349 FOREIGN KEY (id_usuario_id) REFERENCES app_users (id)');
        $this->addSql('CREATE INDEX IDX_50FE07D77EB2C349 ON clientes (id_usuario_id)');
        $this->addSql('ALTER TABLE productos ADD brochure VARCHAR(255) DEFAULT NULL, DROP unidad_medida, CHANGE idmedidas_id idmedidas_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE productos ADD CONSTRAINT FK_767490E681FC99F1 FOREIGN KEY (idmedidas_id) REFERENCES medidas (id)');
        $this->addSql('CREATE INDEX IDX_767490E681FC99F1 ON productos (idmedidas_id)');
        $this->addSql('ALTER TABLE proveedores CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE app_users CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C2502824F85E0677 ON app_users (username)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C2502824E7927C74 ON app_users (email)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE facturas DROP FOREIGN KEY FK_622B9C0FE08DFBF7');
        $this->addSql('CREATE TABLE suscripcion (id INT AUTO_INCREMENT NOT NULL, producto_id INT DEFAULT NULL, razon_social VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, rfc VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, telefono VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, email VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, estado VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ciudad VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, poblacion VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, codigo_postal VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, colonia VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, calle VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, numero_exterior VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, numero_interior VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, nombrecompleto_responsable VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, email_responsable VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, telefono_movil_responsable VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, periodo VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, codigo_promocional VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, terminos_condiciones VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, INDEX IDX_497FA07645698E (producto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE suscripcion ADD CONSTRAINT FK_497FA07645698E FOREIGN KEY (producto_id) REFERENCES productos (id)');
        $this->addSql('DROP TABLE almacen');
        $this->addSql('DROP TABLE facturas');
        $this->addSql('DROP TABLE movimientos_depositos');
        $this->addSql('ALTER TABLE app_users MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX UNIQ_C2502824F85E0677 ON app_users');
        $this->addSql('DROP INDEX UNIQ_C2502824E7927C74 ON app_users');
        $this->addSql('ALTER TABLE app_users DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE app_users CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE clientes DROP FOREIGN KEY FK_50FE07D77EB2C349');
        $this->addSql('DROP INDEX IDX_50FE07D77EB2C349 ON clientes');
        $this->addSql('ALTER TABLE productos DROP FOREIGN KEY FK_767490E681FC99F1');
        $this->addSql('DROP INDEX IDX_767490E681FC99F1 ON productos');
        $this->addSql('ALTER TABLE productos ADD unidad_medida VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, DROP brochure, CHANGE idmedidas_id idmedidas_id INT NOT NULL');
        $this->addSql('ALTER TABLE proveedores MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE proveedores DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE proveedores CHANGE id id INT NOT NULL');
    }
}
