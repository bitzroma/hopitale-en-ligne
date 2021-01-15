<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210105032715 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rendez_vous (id INT AUTO_INCREMENT NOT NULL, type_rv VARCHAR(200) NOT NULL, date_rv DATETIME NOT NULL, lieu VARCHAR(100) NOT NULL, docteur VARCHAR(120) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specialiste (id INT AUTO_INCREMENT NOT NULL, nom_sp VARCHAR(70) NOT NULL, prenom_sp VARCHAR(70) NOT NULL, email_sp VARCHAR(75) NOT NULL, adresse_sp VARCHAR(75) NOT NULL, tele VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(75) NOT NULL, prenom VARCHAR(75) NOT NULL, username VARCHAR(75) NOT NULL, email VARCHAR(75) NOT NULL, telephone VARCHAR(30) NOT NULL, adresse VARCHAR(75) NOT NULL, naissance DATE NOT NULL, sexe VARCHAR(30) NOT NULL, password VARCHAR(75) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE rendez_vous');
        $this->addSql('DROP TABLE specialiste');
        $this->addSql('DROP TABLE user');
    }
}
