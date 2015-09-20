<?php

namespace app\models;

use Yii;
use yii\db\Query;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "organizators".
 *
 * @property string $orgNumber
 * @property string $secName
 * @property string $name
 * @property string $lastName
 * @property string $email
 * @property double $salary
 * @property string $telNumb
 * @property string $login
 * @property string $password
 *
 * @property Event1[] $event1s
 */
class Organizators extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'organizators';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['salary'], 'number'],
            [['secName', 'email', 'login', 'password'], 'string', 'max' => 20],
            [['name', 'lastName'], 'string', 'max' => 15],
            [['telNumb'], 'string', 'max' => 12]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'orgNumber' => 'Номер',
            'secName' => 'Фамилия',
            'name' => 'Имя',
            'lastName' => 'Отчество',
            'email' => 'Email',
            'salary' => 'Зарплата',
            'telNumb' => 'Номер телефона',
            'login' => 'Login',
            'password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvent1s()
    {
        return $this->hasMany(Event1::className(), ['orgNumber' => 'orgNumber']);
    }

    public static function getOrgsList(){
        $rows = (new Query)->select(['orgNumber', 'CONCAT(secName, " ", name, " ", lastName) as org_name'])
        ->from(self::tableName())
        ->all();
        return ArrayHelper::map($rows,'orgNumber','org_name');
    }

    public static function getOrgsName($id){
        return (new Query)->select(['CONCAT(secName, " ", name, " ", lastName) as org_name'])
                ->from(self::tableName())
                ->where(['orgNumber'=>$id])
                ->scalar();
    }

}
