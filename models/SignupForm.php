<?php namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\Json;

class SignupForm extends Model
{
    public $username;
    public $password;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username'], 'unique'],
            [['username', 'password'], 'required'],
        ];
    }

    /**
     * Signup process
     *
     * @return bool whether the signup was successful
     */
    public function signup()
    {
        $user = User1::UserSignup($this->username);
        if ($user === null) {
            
            return true;
        }else{
            $errorMessage = 'User registered';
            $js = new \yii\web\JsExpression("alert('$errorMessage');");
            Yii::$app->getView()->registerJs($js);
           
        }
        return false;
       
    }

    public function update()
    {
        $user = User1::UserUpdate($this->username);
        if ($user === null) {
            
            return true;
        }else{
            $errorMessage = 'User registered';
            $js = new \yii\web\JsExpression("alert('$errorMessage');");
            Yii::$app->getView()->registerJs($js);
           
        }
        return false;
       
    }


    
    public function CurlGenerator($url, $method, $data = null)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_POST, true);
      

        if ($data !== null) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_HTTPHEADER, [                
            'Accept: application/json',
            'Content-Type: application/json'
        ]);
        }

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

}
    

