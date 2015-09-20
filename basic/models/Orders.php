<?php

namespace app\models;

use Yii;
use yii\db\Query;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "orders".
 *
 * @property string $orderNumber
 * @property string $eventNumber
 * @property string $orderDate
 * @property string $clientNumber
 *
 * @property Clients $clientNumber0
 * @property Payment[] $payments
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eventNumber', 'serviceNumber','clientNumber'], 'integer'],
            [['orderDate'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'orderNumber' => 'Номер заказа',
            'eventNumber' => 'Мероприятие',
            'serviceNumber' => 'Услуга',
            'orderDate' => 'Дата заказа',
            'clientNumber' => 'Клиент',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientNumber0()
    {
        return $this->hasMany(Clients::className(), ['clientNumber' => 'clientNumber']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payment::className(), ['orderNumber' => 'orderNumber']);
    }

    public function getServices()
    {
        return $this->hasMany(Services::className(), ['serviceNumber' => 'serviceNumber']);
    }


    public function getAssocList()
    {
        $models = $this->findAll(array('order'=>'title ASC'));
        return CHtml::listData(models, 'id', 'title');
    }

    public static function getOrderList(){
        $rows = (new Query)->select(['orderNumber', 'CONCAT("№ ",orderNumber) as orders'])
            ->from(self::tableName())
            ->all();
        return ArrayHelper::map($rows,'orderNumber','orders');
    }

    public static function getOrderName($id){
        return (new Query)->select(['CONCAT("№ ",orderNumber) as orders'])
            ->from(self::tableName())
            ->where(['orderNumber'=>$id])
            ->scalar();
    }
}
