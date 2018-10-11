<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181011133052 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE medidas (id INT AUTO_INCREMENT NOT NULL, unidad VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE productos ADD idmedidas_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE productos ADD CONSTRAINT FK_767490E681FC99F1 FOREIGN KEY (idmedidas_id) REFERENCES medidas (id)');
        $this->addSql('CREATE INDEX IDX_767490E681FC99F1 ON productos (idmedidas_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE productos DROP FOREIGN KEY FK_767490E681FC99F1');
        $this->addSql('DROP TABLE medidas');
        $this->addSql('DROP INDEX IDX_767490E681FC99F1 ON productos');
        $this->addSql('ALTER TABLE productos DROP idmedidas_id');
    }
}
