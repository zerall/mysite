<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\User;
use yii\helpers\Url;
/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>"
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<br><br><br>
<?php $this->beginBody() ?>
    <div class="wrap">
        <?php {
            NavBar::begin([
                'brandLabel' => 'Панель управления',
                'brandUrl' => Url::toRoute('admin/control-panel'),
                'options' => [
                    'class' => 'navbar-default navbar-fixed-top',
                ],
            ]);
             echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-left'],
                'items' => [
                    [
                        'label' => 'Сайт',
                        'items' => [
                            ['label' => 'Главная', 'url' => ['/site/index']],
                            ['label' => 'Контакты', 'url' => ['/site/contact']],
                            ['label' => 'Наши услуги', 'url' => ['/site/our-services']],
                            ['label' => 'Оформить заказ', 'url' => ['/site/order-form']],
                        ],
                    ],
                    [
                        'label' => 'Люди',
                        'items' => [
                            ['label' => 'Клиенты', 'url' => ['/clients/index']],
                            ['label' => 'Организаторы', 'url' => ['/organizators/index']],
                            ['label' => 'Аниматоры', 'url' => ['/animators/index']],
                            ['label' => 'Услуги аниматора', 'url' => ['/animservices/index']],
                            ['label' => 'Мероприятия-Аниматоры', 'url' => ['/animevents/index']],
                            ['label' => 'Мероприятия-Услуги', 'url' => ['/eventservices/index']],
                        ],
                    ],
                    ['label' => 'Мероприятия', 'url' => ['/event1/index']],
                    ['label' => 'Сервис', 'url' => ['/services/index']],
                    ['label' => 'Оплаты', 'url' => ['/payment/index']],
                    ['label' => 'Заказы', 'url' => ['/orders/index']],
                    ['label' => 'Отчеты', 'url' => ['/eventreports/index']],
                    ['label' => 'Новости', 'url' => ['/site/news']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout (' . Yii::$app->user->identity->user_name . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);

            NavBar::end();
        }

        ?>
        <!-- Menu -->
    <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ?  $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <div id="footer">
      <div class="container">
        <h5 class="text-primary text-center well well-lg">© Зера и КО 2015. All rights reserved</h5>
      </div>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
