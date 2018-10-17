<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181017023924 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE facturas ADD idcliente_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE facturas ADD CONSTRAINT FK_622B9C0F13DA536B FOREIGN KEY (idcliente_id) REFERENCES clientes (id)');
        $this->addSql('CREATE INDEX IDX_622B9C0F13DA536B ON facturas (idcliente_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE facturas DROP FOREIGN KEY FK_622B9C0F13DA536B');
        $this->addSql('DROP INDEX IDX_622B9C0F13DA536B ON facturas');
        $this->addSql('ALTER TABLE facturas DROP idcliente_id');
    }
}
