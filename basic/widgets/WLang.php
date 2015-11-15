<?php
/**
 * Created by PhpStorm.
 * User: Зера
 * Date: 15.11.2015
 * Time: 13:31
 */

namespace app\widgets;
use app\models\Lang;

class WLang extends \yii\bootstrap\Widget
{
    public function init(){}

    public function run() {
        return $this->render('lang/view', [
            'current' => Lang::getCurrent(),
            'langs' => Lang::find()->where('id != :current_id', [':current_id' => Lang::getCurrent()->id])->all(),
        ]);
    }
}