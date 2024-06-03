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
        
        $curl = curl_init($url);
        
        curl_setopt_array($curl, array(
            
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Content-Type: application/json'
            ),
        ));
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        
        $response = curl_exec($curl);
        
        
        curl_close($curl);
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
