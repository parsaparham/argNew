<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%banks}}`.
 */
class m230127_193704_create_banks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%banks}}', [
            'id' => $this->primaryKey(),
            'kind' =>$this->string(256)->notNull(),
            'owner' =>$this->string(245)->notNull(),
            'number'=>$this->string(256)->notNull(),
            'bank'=>$this->string(256)->notNull()

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%banks}}');
    }
}
