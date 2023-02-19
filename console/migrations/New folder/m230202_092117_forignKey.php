<?php

use yii\db\Migration;

/**
 * Class m230202_092117_forignKey
 */
class m230202_092117_forignKey extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk-products-cat_id', 'products', 'cat_id', 'categories', 'id','CASCADE');
        $this->addForeignKey('fk-products-brand_id','products','brand_id','brands','id','CASCADE');
        $this->addForeignKey('fk-orders-product_id','orders','product_id','products','id','CASCADE');
        $this->addForeignKey('fk-users-user_id','orders','user_id','users','id','CASCADE');
        $this->addForeignKey('fk-permission_id','users','permission_id','permissions','id','CASCADE');

        $this->insert('permissions',['name'=>'admin','access_id'=>1]);
        $this->insert('permissions',['name'=>'user','access_id'=>2]);
        $this->insert('users',['first_name'=>'admin','permission_id'=>1,'user_name'=>'admin','password'=>md5('admin'),'authKey'=>'','accessToken'=>'','mobile'=>'09132263154']);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230202_092117_forignKey cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230202_092117_forignKey cannot be reverted.\n";

        return false;
    }
    */
}
