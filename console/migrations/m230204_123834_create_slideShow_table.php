<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%slideShows}}`.
 */
class m230204_123834_create_slideShow_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%slideShows}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(256)->notNull(),
            'priority' => $this->integer(2)->notNull(),
            'active' => $this->integer(1)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%slideShows}}');
    }
}
