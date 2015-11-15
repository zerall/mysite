<?php
/**
 * Created by PhpStorm.
 * User: Зера
 * Date: 15.11.2015
 * Time: 13:35
 */
use yii\helpers\Html;
?>
<div id="lang">
 <span id="current-lang" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <?= $current->local;?> <span class="show-more-lang">▼</span>
</span>
    <ul id="langs" class="dropdown-menu" aria-labelledby="dLabel">
        <?php foreach ($langs as $lang):?>
            <li>
                <?= Html::a($lang->local, '/'.$lang->url.Yii::$app->getRequest()->getLangUrl()) ?>
            </li>
        <?php endforeach;?>
    </ul>
</div>
