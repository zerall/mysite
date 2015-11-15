<?php

namespace app\models;
use yii\base\Model;
use Yii;
class LoginForm extends Model
{
    public $user_name;
    public $password;
    public $email;
    public $rememberMe = true;
    public $role;
    private $_user = false;

    public function rules()
    {
        return [
            [['user_name', 'password'], 'required', 'on' => 'default'],
            [['email', 'password'], 'required', 'on' => 'loginWithEmail'],
            ['email', 'email'],
            ['rememberMe', 'boolean'],
            ['password', 'validatePassword'],
            ['role', 'number']
        ];
    }
    public function validatePassword($attribute)
    {
        if (!$this->hasErrors()):
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)):
                $field = ($this->scenario === 'loginWithEmail') ? 'email' : 'user_name';
                $this->addError($attribute, 'Неправильный '.$field.' или пароль.');
            endif;
        endif;
    }
    public function getUser()
    {
        if ($this->_user === false):
            if($this->scenario === 'loginWithEmail'):
                $this->_user = User::findByEmail($this->email);
            else:
                $this->_user = User::findByUsername($this->user_name);
            endif;
        endif;
        return $this->_user;
    }
    public function attributeLabels()
    {
        return [
            'user_name' => 'Ник',
            'email' => 'Емайл',
            'password' => 'Пароль',
            'rememberMe' => 'Запомнить меня'
        ];
    }
    public function login()
    {
        if ($this->validate()):
            $this->role = ($user = $this->getUser()) ? $user->role : User::DELETED;
            if (in_array($this->role, array_keys(User::getStatusesArray()))) {
                return Yii::$app->user->login($user, $this->rememberMe ? 3600 * 24 * 30 : 0);
            } else {
                return false;
            }
        else:
            return false;
        endif;
    }
}
