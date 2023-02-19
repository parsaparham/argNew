<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%slideshows}}".
 *
 * @property int $id
 * @property string $name
 * @property int $priority
 * @property int $active
 */
class Slideshows extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%slideshows}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'priority', 'active'], 'required'],
            [['priority', 'active'], 'integer'],
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
            'active' => 'Active',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\SlideshowsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\SlideshowsQuery(get_called_class());
    }
}
