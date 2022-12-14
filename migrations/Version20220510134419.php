<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220510134419 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE reponse_question');
        $this->addSql('ALTER TABLE question ADD id_categorie INT DEFAULT NULL, CHANGE question question VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE reponse ADD id_question INT DEFAULT NULL, CHANGE reponse reponse VARCHAR(255) DEFAULT NULL, CHANGE reponse_expected reponse_expected TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reponse_question (reponse_id INT NOT NULL, question_id INT NOT NULL, INDEX IDX_E97BC6391E27F6BF (question_id), INDEX IDX_E97BC639CF18BB82 (reponse_id), PRIMARY KEY(reponse_id, question_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE reponse_question ADD CONSTRAINT FK_E97BC6391E27F6BF FOREIGN KEY (question_id) REFERENCES question (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reponse_question ADD CONSTRAINT FK_E97BC639CF18BB82 FOREIGN KEY (reponse_id) REFERENCES reponse (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE question DROP id_categorie, CHANGE question question VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE reponse DROP id_question, CHANGE reponse reponse VARCHAR(255) NOT NULL, CHANGE reponse_expected reponse_expected SMALLINT NOT NULL');
    }
}
