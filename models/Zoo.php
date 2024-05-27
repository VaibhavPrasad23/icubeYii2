<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Zoo".
 *
 * @property int $Animal_ID
 * @property string $Animal
 * @property int $Age
 * @property string $Location
 * @property string $Gender
 * @property string $Transfer
 * @property string $Nutrition
 */
class Zoo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Zoo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Animal', 'Age', 'Location', 'Gender', 'Transfer', 'Nutrition'], 'required'],
            [['Age'], 'integer'],
            [['Animal'], 'string', 'max' => 50],
            [['Location'], 'string', 'max' => 256],
            [['Gender'], 'string', 'max' => 6],
            [['Transfer'], 'string', 'max' => 360],
            [['Nutrition'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Animal_ID' => 'Animal ID',
            'Animal' => 'Animal',
            'Age' => 'Age',
            'Location' => 'Location',
            'Gender' => 'Gender',
            'Transfer' => 'Transfer',
            'Nutrition' => 'Nutrition',
        ];
    }
}
