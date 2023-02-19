<?php

use yii\db\Migration;

/**
 * Class m230209_063528_addAuthKeyCol
 */
class m230209_063528_addAuthKeyCol extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $this->addColumn('users','auth_key','string');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230209_063528_addAuthKeyCol cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230209_063528_addAuthKeyCol cannot be reverted.\n";

        return false;
    }
    */
}
