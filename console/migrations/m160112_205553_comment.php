<?php

use yii\db\Schema;
use yii\db\Migration;

class m160112_205553_comment extends Migration
{
    public function up()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'id_post' => $this->integer(),
            'author' => $this->string(),
            'created_at' => $this->timestamp()->notNull(),
            'description' => $this->text()->notNull(),
        ]);

        $this->addForeignKey('FK_comments_post', 'comments', 'id_post', '{{%post}}', 'id');
    }

    public function down()
    {
        $this->dropTable('comments');
    }
}
