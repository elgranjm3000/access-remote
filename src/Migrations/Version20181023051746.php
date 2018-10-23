<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181023051746 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ingresos (id INT AUTO_INCREMENT NOT NULL, productos_id INT DEFAULT NULL, proveedor_id INT DEFAULT NULL, almacen_id INT DEFAULT NULL, cantidad INT NOT NULL, fecha DATE NOT NULL, comentario LONGTEXT NOT NULL, INDEX IDX_96CA59DAED07566B (productos_id), INDEX IDX_96CA59DACB305D73 (proveedor_id), INDEX IDX_96CA59DA9C9C9E68 (almacen_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ingresos ADD CONSTRAINT FK_96CA59DAED07566B FOREIGN KEY (productos_id) REFERENCES productos (id)');
        $this->addSql('ALTER TABLE ingresos ADD CONSTRAINT FK_96CA59DACB305D73 FOREIGN KEY (proveedor_id) REFERENCES proveedores (id)');
        $this->addSql('ALTER TABLE ingresos ADD CONSTRAINT FK_96CA59DA9C9C9E68 FOREIGN KEY (almacen_id) REFERENCES almacen (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE ingresos');
    }
}
