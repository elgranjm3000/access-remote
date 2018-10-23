<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181023013817 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE movimientos_almacen ADD idfactura_id INT DEFAULT NULL, CHANGE fecha fecha DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE movimientos_almacen ADD CONSTRAINT FK_9D44A9733DE66465 FOREIGN KEY (idfactura_id) REFERENCES facturas (id)');
        $this->addSql('CREATE INDEX IDX_9D44A9733DE66465 ON movimientos_almacen (idfactura_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE movimientos_almacen DROP FOREIGN KEY FK_9D44A9733DE66465');
        $this->addSql('DROP INDEX IDX_9D44A9733DE66465 ON movimientos_almacen');
        $this->addSql('ALTER TABLE movimientos_almacen DROP idfactura_id, CHANGE fecha fecha DATE NOT NULL');
    }
}
