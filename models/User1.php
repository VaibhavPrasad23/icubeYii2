<?php
namespace app\models;

use yii\base\Security;
use yii\db\ActiveRecord;
use yii;

class User1 extends ActiveRecord implements \yii\web\IdentityInterface
{
    public $authKey;
    public $accessToken;


    public static function tableName()
    {
        return'login';
    }
    
    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);    }
    
    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        // return $token;
        foreach (Yii::$app->get('username') as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }
        
        return null;
    }
    
    /**
     * Finds user by username
     *
     * @param string $username
     * @return User1|null
     */
    // Find a user by username
   

    public static function UserSignup($username)
    {
        $username = Yii::$app->request->post('SignupForm')['username'];
        $password = Yii::$app->request->post('SignupForm')['password'];
        
        
        
        $url ='http://localhost:8090/api/web/myresource/saveuser';
        
        $data = [
            'username' => $username,
            'password' => $password
        ];
        
        $model = new SignupForm();

        $response = $model->CurlGenerator($url, 'POST', $data);

        echo $response;
    }
    



    public static function UserUpdate($username)
    {
        $id = Yii::$app->request->post('SpecuserForm')['id'];
        $password = Yii::$app->request->post('SpecuserForm')['username'];
        
        
        
        $url ='http://localhost:8090/'.$id.'/api/web/messages/updateusers/'.$id;
        
        $data = [
            'id' => $id,
            'username' => $username
        ];
                
                    
            $model = new SignupForm();

            $response = $model->CurlGenerator($url, 'POST', $data);

            return $response;
    }
    


  


    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }
    
    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    
    
}
