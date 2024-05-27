<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user
 *
 */
/**
 * This is the model class for table "account".
 *
 * @property string $idaccount
 * @property string $name
 * @property string $username
 * @property string $password
 * @property string $idrole
 * @property string $idcompany
 */











class Account extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'account';
    }


    private $_user = false;

    const SCENARIO_LOGIN = 'login';
    const SCENARIO_SIGNUP = 'register';



    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required', 'on' => self::SCENARIO_LOGIN],
            [['name', 'username', 'password', 'idrole', 'idcompany'], 'required', 'on' => self::SCENARIO_SIGNUP],
            // [['idaccount', 'name', 'username', 'password', 'idrole', 'idcompany'], 'required'],
            [['idaccount', 'name', 'username', 'password', 'idrole', 'idcompany'], 'string', 'max' => 50],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idaccount' => 'ID',
            'name' => 'Name',
            'username' => 'Username',
            'password' => 'Password',
            'idrole' => 'Role',
            'idcompany' => 'Company',
        ];
    }


    public function UserPassExist($username, $password)
    {
        return Account::findOne(['username' => $username, 'password' => $password]) ? true : false;
    }



    public function login()
    {
        if ($this->validate() && $this->UserPassExist($this->username, $this->password)) {
            return Yii::$app->user->login($this->getUser());
        }
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username, $this->password);
        }
        return $this->_user;
    }
}
