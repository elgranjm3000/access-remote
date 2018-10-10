<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181007064415 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE clientes (id INT AUTO_INCREMENT NOT NULL, id_usuario_id INT DEFAULT NULL, nombre VARCHAR(255) NOT NULL, nit VARCHAR(255) NOT NULL, contacto_principal VARCHAR(255) NOT NULL, correo VARCHAR(255) NOT NULL, fecha_nacimiento DATE NOT NULL, comentarios LONGTEXT NOT NULL, zona VARCHAR(255) NOT NULL, dpto VARCHAR(255) NOT NULL, municipio VARCHAR(255) NOT NULL, telefono_movil VARCHAR(255) NOT NULL, telefono_local VARCHAR(255) NOT NULL, direccion LONGTEXT NOT NULL, INDEX IDX_50FE07D77EB2C349 (id_usuario_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE clientes ADD CONSTRAINT FK_50FE07D77EB2C349 FOREIGN KEY (id_usuario_id) REFERENCES app_users (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE clientes');
    }
}
