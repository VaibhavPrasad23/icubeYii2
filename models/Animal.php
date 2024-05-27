<?php

namespace app\models;

use Yii;


use yii\web\UploadedFile;
use yii\base\Request;



/**
 * This is the model class for table "animal".
 *
 * @property int $ID
 * @property string $name
 * @property string $nutrition
 * @property string $picture
 * @property string $information
 */
class Animal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'animal';
    }

    const SCENARIO_UPDATE = 'update';

    const SCENARIO_CREATE = 'create';

 
    public function scenarios(){

        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_CREATE] = ['name','nutrition','picture','information'];
        $scenarios[self::SCENARIO_UPDATE] = ['name','nutrition','information'];
    }
    


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'nutrition', 'information','picture'], 'required'],
            [['name', 'nutrition', ], 'string', 'max' => 50],
            [['information'], 'string', 'max' => 300],
            [['picture'], 'file', 'extensions' => 'png, jpg, jpeg,'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'name' => 'Name',
            'nutrition' => 'Nutrition',
            'picture' => 'Picture',
            'information' => 'Information',
        ];
    }



    public function getPictureUrl()
        {

        $imgS = Yii::getAlias('@web').'/'. $this->picture;
        return $imgS;

        }



        public function getPicture2Url()
        {

        $imgS = Yii::getAlias('@web').'/uploads/'. $this->picture;
        return $imgS;

        }

        // public function postDeleteImage($id)
        // {
        //     $model = new Animal();
        //     $model->picture = UploadedFile::getInstance($model,'picture');
        //     $fileName = time().'.'.$model->picture->extension;
        //     $model->picture->saveAs('uploads/'.$fileName);
        //     $model->picture = 'uploads/'.$fileName;
        // } 
    
        }
