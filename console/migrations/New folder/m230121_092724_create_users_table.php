<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m230121_092724_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'first_name'=>$this->string(256)->notNull(),
            'last_name'=>$this->string(),
            'permission_id'=>$this->integer(15)->notNull(),
            'user_name'=>$this->string(20)->notNull()->unique(),
            'password'=>$this->string(32)->notNull(),
            'authKey'=>$this->string()->notNull()->unique(),
            'accessToken'=>$this->string()->notNull()->unique(),
            'mobile'=>$this->string(25)->notNull()->unique(),
            'address'=>$this->text(),
            'email'=>$this->string(256)->unique()
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
