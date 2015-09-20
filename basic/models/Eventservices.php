<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Eventservices".
 *
 * @property string $eventNumber
 * @property string $serviceNumber
 */
class Eventservices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Eventservices';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eventNumber', 'serviceNumber'], 'required'],
            [['eventNumber', 'serviceNumber'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'eventNumber' => 'Мероприятие',
            'serviceNumber' => 'Услуга',
        ];
    }
}
