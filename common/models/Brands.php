<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%brands}}".
 *
 * @property int $id
 * @property string $name
 * @property string|null $image
 */
class Brands extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%brands}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'image'], 'string', 'max' => 256],
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
            'image' => 'Image',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\BrandsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\BrandsQuery(get_called_class());
    }
}
