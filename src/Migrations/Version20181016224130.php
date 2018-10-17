<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181016224130 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE movimientos_depositos ADD facturas_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE movimientos_depositos ADD CONSTRAINT FK_93F425AA1C55BE39 FOREIGN KEY (facturas_id) REFERENCES facturas (id)');
        $this->addSql('CREATE INDEX IDX_93F425AA1C55BE39 ON movimientos_depositos (facturas_id)');
        $this->addSql('ALTER TABLE facturas DROP FOREIGN KEY FK_622B9C0FE08DFBF7');
        $this->addSql('DROP INDEX IDX_622B9C0FE08DFBF7 ON facturas');
        $this->addSql('ALTER TABLE facturas DROP movimientos_depositos_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE facturas ADD movimientos_depositos_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE facturas ADD CONSTRAINT FK_622B9C0FE08DFBF7 FOREIGN KEY (movimientos_depositos_id) REFERENCES movimientos_depositos (id)');
        $this->addSql('CREATE INDEX IDX_622B9C0FE08DFBF7 ON facturas (movimientos_depositos_id)');
        $this->addSql('ALTER TABLE movimientos_depositos DROP FOREIGN KEY FK_93F425AA1C55BE39');
        $this->addSql('DROP INDEX IDX_93F425AA1C55BE39 ON movimientos_depositos');
        $this->addSql('ALTER TABLE movimientos_depositos DROP facturas_id');
    }
}
