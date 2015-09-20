<?php

namespace app\models;

use Yii;
use yii\db\Query;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "event1".
 *
 * @property string $eventNumber
 * @property string $eventType
 * @property string $amountOfGuests
 * @property string $orgNumber
 * @property string $place
 * @property string $eventDate
 * @property string $eventName
 *
 * @property Animevents[] $animevents
 * @property Animators[] $animNumbers
 * @property Organizators $orgNumber0
 * @property Eventreports[] $eventreports
 */
class Event1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['amountOfGuests', 'orgNumber'], 'integer'],
            [['eventDate'], 'safe'],
            [['eventType'], 'string', 'max' => 50],
            [['place', 'eventName'], 'string', 'max' => 30],
            [['eventDate','eventType', 'eventName'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'eventType' => 'Вид мероприятия',
            'eventName' => 'Название мероприятия',
            'amountOfGuests' => 'Количество гостей',
            'orgNumber' => 'Организатор',
            'place' => 'Место проведения',
            'eventDate' => 'Дата проведения',
            'eventNumber' => 'Номер'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnimevents()
    {
        return $this->hasMany(Animevents::className(), ['eventNumber' => 'eventNumber']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnimNumbers()
    {
        return $this->hasMany(Animators::className(), ['animNumber' => 'animNumber'])->viaTable('animevents', ['eventNumber' => 'eventNumber']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrgNumber0()
    {
        return $this->hasOne(Organizators::className(), ['orgNumber' => 'orgNumber']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventreports()
    {
        return $this->hasMany(Eventreports::className(), ['eventNumber' => 'eventNumber']);
    }

    public static function getEventList(){
        $rows = (new Query)->select(['eventType', 'CONCAT("  ", eventType) as event_type'])
        ->from(self::tableName())
        ->all();
        return ArrayHelper::map($rows,'eventType','event_type');
    }

    public static function getEventName($id){
        return (new Query)->select(['CONCAT(" ", eventType) as event_type'])
            ->from(self::tableName())
            ->where(['eventNumber'=>$id])
            ->scalar();
    }
}
