<?php namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\Json;

class SpecuserForm extends Model
{
    public $username;
    public $id;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['username'], 'safe'],
        ];
    }

    /**
     * Signup process
     *
     * @return bool whether the signup was successful
     */
     

     public function callSpecuser($id)
     {
      
             $url = 'http://localhost:8090/api/web/messages/msgs/id/'. $id;
        
       
             $model = new SignupForm();

             $response = $model->CurlGenerator($url, 'GET', $data=null);
 
             return $response;
 
     }

     public function callSpecuserID($id)
    {
 
        
            $url = 'http://localhost:8090/api/web/messages/msgs/'. $id;

                   
            $model = new SignupForm();

            $response = $model->CurlGenerator($url, 'GET', $data=null);

            echo $response;

    }

 
  
    }
