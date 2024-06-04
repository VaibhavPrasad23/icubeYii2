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
}
    

