<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230221164200 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO user (username, roles, password) VALUES ('admin_johnny', '[\"ROLE_ADMIN\"]', '\$2y\$13\$gRi.YGsHxlXzVsCBBfpPmuTtbg2ctazjMwmJC/gvs5BopFg40sfea')");
        $this->addSql("INSERT INTO user (username, roles, password) VALUES ('admin_marc', '[\"ROLE_ADMIN\"]', '\$2y\$13\$v8rNJu66wf/gaYKms65LOeqnf9Vf.vN83Nrbpm0ZuUJQFzJ0ilMTG')");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('TRUNCATE TABLE user');
    }
}
