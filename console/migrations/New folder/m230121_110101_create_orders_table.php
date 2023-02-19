<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%orders}}`.
 */
class m230121_110101_create_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%orders}}', [
            'id' => $this->primaryKey(),
            'number'=>$this->string(256)->notNull(),
            'date'=>$this->string(256)->notNull(),
            'time'=>$this->string(256)->notNull(),
            'product_id'=>$this->integer(15)->notNull(),
            'user_id'=>$this->integer(5)->notNull(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%orders}}');
    }
}
