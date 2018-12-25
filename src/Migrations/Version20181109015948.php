<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181109015948 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE agruparproducto (id INT AUTO_INCREMENT NOT NULL, idproducto_id INT DEFAULT NULL, cantidad INT NOT NULL, INDEX IDX_7F8C88BCB0841921 (idproducto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE agruparproducto ADD CONSTRAINT FK_7F8C88BCB0841921 FOREIGN KEY (idproducto_id) REFERENCES productos (id)');
        $this->addSql('ALTER TABLE ingresos CHANGE comentario comentario LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE agruparproducto');
        $this->addSql('ALTER TABLE ingresos CHANGE comentario comentario LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
