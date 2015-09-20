<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "animevents".
 *
 * @property string $animNumber
 * @property string $eventNumber
 *
 * @property Animators $animNumber0
 * @property Event1 $eventNumber0
 */
class Animevents extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'animevents';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['animNumber', 'eventNumber'], 'required'],
            [['animNumber', 'eventNumber'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'animNumber' => 'Аниматор',
            'eventNumber' => 'Мероприятия',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnimNumber0()
    {
        return $this->hasOne(Animators::className(), ['animNumber' => 'animNumber']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventNumber0()
    {
        return $this->hasOne(Event1::className(), ['eventNumber' => 'eventNumber']);
    }
}
