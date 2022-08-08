<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220510083015 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, id_category VARCHAR(255) NOT NULL,  question VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question_category (question_id INT NOT NULL, categorie_id INT NOT NULL, INDEX IDX_6544A9CD1E27F6BF (question_id), INDEX IDX_6544A9CD12469DE2 (categorie_id), PRIMARY KEY(question_id, categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponse (id INT AUTO_INCREMENT NOT NULL, reponse VARCHAR(255) NOT NULL, reponse_expected SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponse_question (reponse_id INT NOT NULL, question_id INT NOT NULL, INDEX IDX_E97BC639CF18BB82 (reponse_id), INDEX IDX_E97BC6391E27F6BF (question_id), PRIMARY KEY(reponse_id, question_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE question_categorie ADD CONSTRAINT FK_6544A9CD1E27F6BF FOREIGN KEY (question_id) REFERENCES question (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE question_categorie ADD CONSTRAINT FK_6544A9CD12469DE2 FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reponse_question ADD CONSTRAINT FK_E97BC639CF18BB82 FOREIGN KEY (reponse_id) REFERENCES reponse (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reponse_question ADD CONSTRAINT FK_E97BC6391E27F6BF FOREIGN KEY (question_id) REFERENCES question (id) ON DELETE CASCADE');

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE question_categorie DROP FOREIGN KEY FK_6544A9CD12469DE2');
        $this->addSql('ALTER TABLE question_categorie DROP FOREIGN KEY FK_6544A9CD1E27F6BF');
        $this->addSql('ALTER TABLE reponse_question DROP FOREIGN KEY FK_E97BC6391E27F6BF');
        $this->addSql('ALTER TABLE reponse_question DROP FOREIGN KEY FK_E97BC639CF18BB82');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE question');
        $this->addSql('DROP TABLE question_categorie');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE reponse_question');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`');
    }
}
