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
        
         $curl = curl_init();
 
         curl_setopt_array($curl, array(
         CURLOPT_URL => $url,
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => '',
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 0,
         CURLOPT_FOLLOWLOCATION => true,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => 'GET',
         ));
 
         $response = curl_exec($curl);
 
         curl_close($curl);
         echo $response;
 
     }

     public function callSpecuserID($id)
    {
 
        
            $url = 'http://localhost:8090/api/web/messages/msgs/'. $id;
        
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

    }

  
    }
