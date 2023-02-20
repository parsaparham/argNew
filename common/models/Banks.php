<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%banks}}".
 *
 * @property int $id
 * @property string $kind
 * @property string $owner
 * @property string $number
 * @property string $bank
 */
class Banks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%banks}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kind', 'owner', 'number', 'bank'], 'required'],
            [['kind', 'number', 'bank'], 'string', 'max' => 256],
            [['owner'], 'string', 'max' => 245],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kind' => 'Kind',
            'owner' => 'Owner',
            'number' => 'Number',
            'bank' => 'Bank',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\BanksQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\BanksQuery(get_called_class());
    }
}
