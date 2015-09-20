<?php

namespace app\models;

use Yii;
use yii\db\Query;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "services".
 *
 * @property string $serviceNumber
 * @property string $serviceName
 * @property double $price
 * @property string $serviceDescription
 *
 * @property Animservices[] $animservices
 * @property Animators[] $animNumbers
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['serviceDescription'], 'string'],
            [['serviceName'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serviceNumber' => 'Номер услуги',
            'serviceName' => 'Название услуги',
            'price' => 'Цена',
            'serviceDescription' => 'Описание',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */

    public static function getServicesList(){
        $rows = (new Query)->select(['serviceNumber', 'CONCAT("№ ",serviceNumber, " - ", serviceName) as event_name'])
            ->from(self::tableName())
            ->all();
        return ArrayHelper::map($rows,'serviceNumber','event_name');
    }

    public static function getServicesName($id){
        return (new Query)->select(['CONCAT("№ ",serviceNumber, " - ", serviceName) as event_name'])
            ->from(self::tableName())
            ->where(['serviceNumber'=>$id])
            ->scalar();
    }

    public static function getServList(){
        $rows = (new Query)->select(['serviceNumber', 'CONCAT(" ",serviceName) as anim_name'])
            ->from(self::tableName())
            ->all();
        return ArrayHelper::map($rows,'serviceNumber','anim_name');
    }

    public static function getServName($id){
        return (new Query)->select(['CONCAT(" ",serviceName) as anim_name'])
            ->from(self::tableName())
            ->where(['serviceNumber'=>$id])
            ->scalar();
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnimNumbers()
    {
        return $this->hasMany(Animators::className(), ['animNumber' => 'animNumber'])->viaTable('animservices', ['serviceNumber' => 'serviceNumber']);
    }
}
