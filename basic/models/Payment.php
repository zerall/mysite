<?php

namespace app\models;

use Yii;
use yii\db\Query;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "payment".
 *
 * @property string $orderNumber
 * @property string $paymentDate
 * @property double $payAmount
 *
 * @property Orders $orderNumber0
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[/*'payNumber'*/'orderNumber'], 'integer'],
            [['paymentDate'], 'safe'],
            [['payAmount'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            /*'payNumber' => 'Номер платежа',*/
            'orderNumber' => 'Номер заказа',
            'paymentDate' => 'Дата оплаты',
            'payAmount' => 'Сумма',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayNumber0()
    {
        return $this->hasOne(Payment::className(), ['payNumber' => 'payNumber']);
    }
}
