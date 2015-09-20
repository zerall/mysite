<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $login
 * @property string $password
 * @property integer $role
 */
class Users extends \yii\db\ActiveRecord
{
    const USER = 0;
    const ANIMATOR = 1;
    const ORGANIZATOR = 5;
    const ADMINISTRATOR = 10;

    public function getStatusName()
    {
        $statuses = self::getStatusesArray();
        return isset($statuses[$this->status]) ? $statuses[$this->status] : '';
    }

    public static function getStatusesArray()
    {
        return [
            self::USER => 'Пользователь',
            self::ANIMATOR => 'Аниматор',
            self::ORGANIZATOR => 'Организатор',
            self::ADMINISTRATOR => 'Администратор',
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
            [['login', 'password', 'role'], 'required'],
            [['role'], 'in', 'range' => array_keys(self::getStatusesArray())],
            [['login', 'password'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Пароль',
            'role' => 'Должность',
        ];
    }

    public static function isUserAdmin($username)
    {
        if (static::findOne(['username' => $username, 'role' => self::ROLE_ADMIN]))
        {
            return true;
        } else {
            return false;
        }
    }
}
