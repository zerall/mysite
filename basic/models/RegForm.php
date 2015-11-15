<?php
/**
 * Created by PhpStorm.
 * User: phpNT
 * Date: 02.05.2015
 * Time: 18:17
 */
namespace app\models;
use yii\base\Model;
use Yii;

class RegForm extends Model
{
    public $user_name;
    public $email;
    public $password;
    public $role;
    public function rules()
    {
        return [
            [['user_name', 'email', 'password'],'filter', 'filter' => 'trim'],
            [['user_name', 'email', 'password'],'required'],
            ['user_name', 'string', 'min' => 2, 'max' => 255],
            ['password', 'string', 'min' => 6, 'max' => 255],
            ['user_name', 'unique',
                'targetClass' => User::className(),
                'message' => 'Это имя уже занято.'],
            ['email', 'email'],
            ['email', 'unique',
                'targetClass' => User::className(),
                'message' => 'Эта почта уже занята.'],
            ['role', 'default', 'value' => User::USER, 'on' => 'default'],
            ['role', 'in', 'range' =>[
                User::DELETED,
                User::USER
            ]],
        ];
    }
    public function attributeLabels()
    {
        return [
            'user_name' => 'Имя пользователя',
            'email' => 'Эл. почта',
            'password' => 'Пароль'
        ];
    }
    public function reg()
    {
        $user = new User();
        $user->user_name = $this->user_name;
        $user->email = $this->email;
        $user->role = $this->role;
        $user->setPassword($this->password);
        $user->generateAuthKey();
//        $user->validate();
//        die(print_r( $user->errors));

        return $user->save() ? $user : null;
    }
}