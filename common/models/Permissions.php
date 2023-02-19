<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%permissions}}".
 *
 * @property int $id
 * @property string $name
 * @property int $access_id
 */
class Permissions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%permissions}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'access_id'], 'required'],
            [['access_id'], 'integer'],
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
            'access_id' => 'Access ID',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\PermissionsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PermissionsQuery(get_called_class());
    }
}
