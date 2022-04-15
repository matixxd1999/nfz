<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220415100150 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE patients (id INT AUTO_INCREMENT NOT NULL, sex_id INT DEFAULT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, date_of_birth DATE NOT NULL, adress VARCHAR(255) NOT NULL, pesel VARCHAR(255) NOT NULL, INDEX IDX_2CCC2E2C5A2DB2A0 (sex_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sex (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specjalizations (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE patients ADD CONSTRAINT FK_2CCC2E2C5A2DB2A0 FOREIGN KEY (sex_id) REFERENCES sex (id)');
        $this->addSql('ALTER TABLE doctors ADD specjalizations_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE doctors ADD CONSTRAINT FK_B67687BE1839995B FOREIGN KEY (specjalizations_id) REFERENCES specjalizations (id)');
        $this->addSql('CREATE INDEX IDX_B67687BE1839995B ON doctors (specjalizations_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patients DROP FOREIGN KEY FK_2CCC2E2C5A2DB2A0');
        $this->addSql('ALTER TABLE doctors DROP FOREIGN KEY FK_B67687BE1839995B');
        $this->addSql('DROP TABLE patients');
        $this->addSql('DROP TABLE sex');
        $this->addSql('DROP TABLE specjalizations');
        $this->addSql('DROP INDEX IDX_B67687BE1839995B ON doctors');
        $this->addSql('ALTER TABLE doctors DROP specjalizations_id');
    }
}
