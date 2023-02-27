<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

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
     * @var \yii\web\UploadedFile
     */
    public $brandImage;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%brands}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            [
                'class' => BlameableBehavior::class,
                'updatedByAttribute' => false
            ]
        ];
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

    public function save($runValidation = true, $attributeNames = null)
    {
        $isInsert=$this->getIsNewRecord();
        if($isInsert){
            $this->id=Yii::$app->security->generateRandomString(8);
            $this->name=$this->video->name;
        }
        $save=parent::save($runValidation,$attributeNames);
        if(!$save){
            return false;
        }
        if($isInsert){
            $brandImagePath=Yii::getAlias('@frontend/web/storage/brands/'.$this->id.'.jpg');
            if(!is_dir(dirname($brandImagePath))){
                FileHelper::createDirectory(dirname($brandImagePath));
            }
            $this->brandImage->saveAs($brandImagePath);
        }

        return true;

    }

}
