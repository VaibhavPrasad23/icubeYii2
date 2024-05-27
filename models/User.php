<?php

namespace app\models;

use Codeception\Scenario;
use Yii;
class User extends Account implements \yii\web\IdentityInterface
{

    // public $id = 'SELECT idaccount FROM account';

    // public $username = "username";
    // public $password = "password";



    public $authKey;
    public $accessToken;




    
    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(['idaccount' => $id]);
        
    }

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

    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username, $password)
    {
            return self::findOne(["username" => $username, "password" => $password]);
    
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->idaccount;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->name === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {   
        return $this->password === $password;
    

}
    


}
