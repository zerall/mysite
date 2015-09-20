<?php

namespace app\models;

use Yii;
use yii\db\Query;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "clients".
 *
 * @property string $clientNumber
 * @property string $secName
 * @property string $name
 * @property string $lastName
 * @property string $email
 * @property string $telNumb
 *
 * @property Orders[] $orders
 */
class Clients extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['secName', 'email'], 'string', 'max' => 20],
            [['name', 'lastName'], 'string', 'max' => 15],
            [['telNumb'], 'string', 'max' => 15],
            [['name','telNumb', 'secName', 'lastName'], 'required'],
            [['email'],'email'],
            [['comment'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'clientNumber' => 'Номер клиента',
            'secName' => 'Фамилия',
            'name' => 'Имя',
            'lastName' => 'Отчество',
            'email' => 'Email',
            'telNumb' => 'Номер телефона',
            'comment' => 'Комментарий'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['clientNumber' => 'clientNumber']);
    }

    public static function getClientsList(){
        $rows = (new Query)->select(['clientNumber', 'CONCAT(secName, " ", name, " ", lastName) as org_name'])
            ->from(self::tableName())
            ->all();
        return ArrayHelper::map($rows,'clientNumber','org_name');
    }

    public static function getClientsName($id){
        return (new Query)->select(['CONCAT(secName, " ", name, " ",  lastName) as org_name'])
            ->from(self::tableName())
            ->where(['clientNumber'=>$id])
            ->scalar();
    }
}
