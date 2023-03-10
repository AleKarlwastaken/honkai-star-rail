<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230208134950 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
//        // this up() migration is auto-generated, please modify it to your needs
//        $this->addSql('CREATE TABLE messenger_messages (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', headers LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
//        $this->addSql('CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)');
//        $this->addSql('CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)');
//        $this->addSql('CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)');
//        $this->addSql('CREATE TRIGGER notify_trigger AFTER INSERT ON messenger_messages FOR EACH ROW BEGIN DECLARE v_dummy INT; SELECT 1 INTO v_dummy FROM information_schema.TABLES WHERE TABLE_NAME = \'messenger_messages\' AND TABLE_SCHEMA = DATABASE() FOR UPDATE; END');
    }

    public function down(Schema $schema): void
    {
//        // this down() migration is auto-generated, please modify it to your needs
//        $this->addSql('DROP TABLE messenger_messages');
    }
}
