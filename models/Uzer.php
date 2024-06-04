<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 */
class Uzer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'username', 'password'], 'required'],
            [['id'], 'integer'],
            [['username', 'password'], 'string', 'max' => 24],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }




    public function  updater($id, $username, $password)
    { 
        $model = new Uzer();
        $model->username = $username;
        $model->id = $id;
        $model->password = $password;
        if ($model->load(Yii::$app->request->post())) {
        $data = [
            'id'=> $id,  
            'username' => $username,
            'password' => $password,
        ];
        $url =  'http://localhost:8090/api/web/messages/updateusers/'.$id;
         
        $response=$this->CurlGenerator($url, 'PUT', $data);
        echo $response;
        
     
    }
        else echo "why";
    }



}
