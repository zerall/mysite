<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "eventreports".
 *
 * @property string $reportNumber
 * @property string $eventNumber
 * @property string $photoReport
 * @property string $eventDescription
 *
 * @property Event1 $eventNumber0
 */
class Eventreports extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'eventreports';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eventNumber'], 'required'],
            [['eventNumber'], 'integer'],
            [['eventDescription'], 'string'],
            [['photoReport'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'reportNumber' => 'Номер отчета',
            'eventNumber' => 'Мероприятие',
            'photoReport' => 'Фотоотчет',
            'eventDescription' => 'Описание мероприятия',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventNumber0()
    {
        return $this->hasOne(Event1::className(), ['eventNumber' => 'eventNumber']);
    }
}
