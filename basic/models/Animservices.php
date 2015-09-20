<?php

namespace app\models;

use Yii;
use yii\db\Query;
use yii\helpers\ArrayHelper;
use app\models\Services;

/**
 * This is the model class for table "animservices".
 *
 * @property string $animNumber
 * @property string $serviceNumber
 *
 * @property Animators $animNumber0
 * @property Services $serviceNumber0
 */
class Animservices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'animservices';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['animNumber', 'serviceNumber'], 'required'],
            [['animNumber', 'serviceNumber'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'animNumber' => 'Номер аниматора',
            'serviceNumber' => 'Номер услуги',
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
    public function getServiceNumber0()
    {
        return $this->hasOne(Services::className(), ['serviceNumber' => 'serviceNumber']);
    }

    public static function getServAnimList($animNO){
        $rows = (new Query)->select(['services.serviceName', 'services.serviceDescription'])
            ->from(self::tableName())
            ->leftJoin('services', 'services.serviceNumber=animservices.serviceNumber')
            ->where(['animservices.animNumber'=>$animNO])
            ->all();
        return $rows;
            //ArrayHelper::map($rows,'serviceName','anim_name');
    }

}
