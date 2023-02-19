<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m230118_100855_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(256)->notNull(),
            'desc'=>$this->text(),
            'img'=>$this->string(256),
            'cat_id' =>$this->integer()->notNull(),
            'inventory' =>$this->integer()->defaultValue(0),
            'price'=>$this->integer(15)->notNull(),
            'brand_id'=>$this->integer(15)->notNull()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');
    }
}
