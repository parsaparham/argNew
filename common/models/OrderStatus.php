<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%order_status}}".
 *
 * @property int $id
 * @property string $name
 * @property int $priority
 */
class OrderStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%order_status}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'priority'], 'required'],
            [['priority'], 'integer'],
            [['name'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'priority' => 'Priority',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\OrderStatusQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\OrderStatusQuery(get_called_class());
    }
}
