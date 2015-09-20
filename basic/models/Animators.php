<?php

namespace app\models;

use Yii;
use yii\db\Query;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "animators".
 *
 * @property string $animNumber
 * @property string $secName
 * @property string $name
 * @property string $lastName
 * @property string $email
 * @property string $telNumb
 * @property string $experience
 * @property string $login
 * @property string $password
 *
 * @property Animemploy[] $animemploys
 * @property Animevents[] $animevents
 * @property Event1[] $eventNumbers
 * @property Animservices[] $animservices
 * @property Services[] $serviceNumbers
 */
class Animators extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'animators';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['salary'], 'number'],
            [['experience'], 'integer'],
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
            'animNumber' => 'Номер аниматора',
            'secName' => 'Фамилия',
            'name' => 'Имя',
            'lastName' => 'Отчество',
            'email' => 'Email',
            'telNumb' => 'Номер телефона',
            'experience' => 'Стаж работы',
            'salary' => 'Зарплата',
            'login' => 'Login',
            'password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnimemploys()
    {
        return $this->hasMany(Animemploy::className(), ['animNumber' => 'animNumber']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnimevents()
    {
        return $this->hasMany(Animevents::className(), ['animNumber' => 'animNumber']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventNumbers()
    {
        return $this->hasMany(Event1::className(), ['eventNumber' => 'eventNumber'])->viaTable('animevents', ['animNumber' => 'animNumber']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnimservices()
    {
        return $this->hasMany(Animservices::className(), ['animNumber' => 'animNumber']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServiceNumbers()
    {
        return $this->hasMany(Services::className(), ['serviceNumber' => 'serviceNumber'])->viaTable('animservices', ['animNumber' => 'animNumber']);
    }


    public static function getAnimList(){
        $rows = (new Query)->select(['animNumber', 'CONCAT(name, " ", secName, " ", lastName) as anim_name'])
            ->from(self::tableName())
            ->all();
        return ArrayHelper::map($rows,'animNumber','anim_name');
    }

    public static function getAnimName($id){
        return (new Query)->select(['CONCAT(name, " ", secName, " ", lastName) as anim_name'])
            ->from(self::tableName())
            ->where(['animNumber'=>$id])
            ->scalar();
    }
}
