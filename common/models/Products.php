<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%products}}".
 *
 * @property int $id
 * @property string $name
 * @property string|null $desc
 * @property string|null $img
 * @property int $cat_id
 * @property int|null $inventory
 * @property int $price
 * @property int $brand_id
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%products}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'cat_id', 'price', 'brand_id'], 'required'],
            [['desc'], 'string'],
            [['cat_id', 'inventory', 'price', 'brand_id'], 'integer'],
            [['name', 'img'], 'string', 'max' => 256],
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
            'desc' => 'Desc',
            'img' => 'Img',
            'cat_id' => 'Cat ID',
            'inventory' => 'Inventory',
            'price' => 'Price',
            'brand_id' => 'Brand ID',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ProductsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ProductsQuery(get_called_class());
    }
}
