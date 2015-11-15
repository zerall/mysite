<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $fio
 * @property string $password
 * @property integer $role
 * @property integer $auth_key
 */
class User extends ActiveRecord implements IdentityInterface
{
    const USER = 0;
    const DELETED = 15;
    const ANIMATOR = 1;
    const ORGANIZATOR = 5;
    const ROLE_ADMIN = 10;

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->auth_key = \Yii::$app->security->generateRandomString();
            }
            return true;
        }
        return false;
    }

    public function getStatusName()
    {
        $statuses = self::getStatusesArray();
        return isset($statuses[$this->role]) ? $statuses[$this->role] : '';
    }

    public static function getStatusesArray()
    {
        return [
            self::USER => 'Пользователь',
            self::ANIMATOR => 'Аниматор',
            self::ORGANIZATOR => 'Организатор',
            self::ROLE_ADMIN => 'Администратор',
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['user_name', 'email', 'auth_key', 'password', 'created_at', 'updated_at', 'role'], 'required'],
            [['user_name', 'email', 'auth_key', 'password'], 'required'],
            //[['role'], 'in', 'range' => array_keys(self::getStatusesArray())],
            [['fio','created_at', 'updated_at', 'role'],  'safe'],
            [['fio', 'password'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_name' => 'Логин',
            'email' => 'Email',
            'auth_key' => 'Ключ',
            'fio' => 'ФИО',
            'password' => 'Пароль',
            'role' => 'Должность',
        ];
    }

    /* Поведения */

//    public function behaviors() {
//        [
//             TimestampBehavior::className()
//        ];
//    }

    /* Поиск */

    public static function findByUsername($user_name){
        return static::findOne([
            'user_name' => $user_name
        ]);
    }

    /* Хелперы */

    public function setPassword($password){
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }
    
    public function generateAuthKey(){
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    public function ValidatePassword($password){
        return Yii::$app->security->ValidatePassword($password, $this->password);
    }

    public static function isUserAdmin($user_name)
    {
        if (static::findOne(['user_name' => $user_name, 'role' => self::ROLE_ADMIN]))
        {
            return true;
        } else {
            return false;
        }
    }

    /* Аутентификация пользователя */

     public static function findIdentity($id)
    {
        return static::findOne([
            'id' => $id, 
          //  'status' => self::STATUS_ACTIVE
            ]);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }
}
