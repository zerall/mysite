<?php
/**
 * Created by PhpStorm.
 * User: Зера
 * Date: 15.11.2015
 * Time: 13:35
 */
use yii\helpers\Html;
?>

<div id="lang" class="dropdown">
 <a id="current-lang dropdown-toggle" data-toggle="dropdown">
   <?= $current->local;?> <span class="show-more-lang">▼</a>

    <ul id="langs" class="dropdown-menu mydrob">
        <?php foreach ($langs as $lang):?>
            <li>
                <?= Html::a($lang->local, '/'.$lang->url.Yii::$app->getRequest()->getLangUrl()) ?>
            </li>
        <?php endforeach;?>
    </ul>
     </span>
</div>
