<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\HomeAsset;
use yii\helpers\Url;
/* @var $this \yii\web\View */
/* @var $content string */

HomeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <!-- Menu -->
    <nav class="menu" id="theMenu">
        <div class="menu-wrap">
            <h1 class="logo"><a href="<?php echo Url::toRoute('/site/index'); ?>#home">Агентство праздников</a></h1>
            <i class="fa fa-times menu-close"></i>
            <a href="<?php echo Url::toRoute('/site/index'); ?>" class="smoothScroll">Главная</a>
            <a href="#about" class="smoothScroll">О нас</a>
            <a href="#portfolio" class="smoothScroll">Портфолио</a>
            <a href="<?php echo Url::toRoute('/site/about'); ?>" class="smoothScroll"> Наши работы</a>
            <a href="<?php echo Url::toRoute('/site/news'); ?>" class="smoothScroll"> Новости</a>
            <a href="<?php echo Url::toRoute('/site/our-services'); ?>" class="smoothScroll">Услуги</a>
            <a href="<?php echo Url::toRoute('/site/contact'); ?>" class="smoothScroll">Контакты</a>
            <a href="<?php echo Url::toRoute('/site/order-form'); ?>" class="smoothScroll">Оформить заказ</a>
            <?php if(!Yii::$app->user->isGuest) { ?>
                <a href="<?php echo Url::toRoute('/admin/control-panel'); ?>" class="smoothScroll">Панель управления</a>
            <?php } ?>
            <?php if(Yii::$app->user->isGuest) {
                $url = Url::toRoute("/site/login");
                echo '<a href="' . $url . '" class="smoothScroll">Войти</a>';
            } else {
                $url =  Url::toRoute("/site/logout");
                echo '<a data-method = "post" href="' . $url . '" class="smoothScroll">Выйти(' . Yii::$app->user->identity->username . ')</a>';
            }
            ?>

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-envelope"></i></a>
        </div>
        <!-- Menu button -->
        <div id="menuToggle"><i class="fa fa-bars"></i></div>
    </nav>
<?php

    $controller = Yii::$app->controller;
    $default_controller = Yii::$app->defaultRoute;
    $isHome = (($controller->id === $default_controller) && ($controller->action->id === $controller->defaultAction)) ? true : false;

    if($isHome) :
?>
    <section id="home" name="home"></section>
    <div id="headerwrap">
        <div class="container">
            <div class="row">
                <div class="la" align="center">
                    <h1 align="center">АГЕНТСТВО ПРАЗДНИКОВ</h1>
                </div>
            </div><!--/row -->
        </div><!--/container -->
    </div><!--/headerwrap -->
<?php endif; ?>
    <br>
    <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <!-- SERVICE SECTION -->
    <section id="contact" name="contact"></section>
    <div id="contactwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" id = "border">
                    <p><small>АДРЕС</small></p>
                    <p><small>г. Севастополь, Общежитий  №3 <br> ул. Университетская 26, ком. 341, этаж 4</small></p><br><br>
                    <p><small>КОНТАКТНЫЕ&nbsp; ТЕЛЕФОНЫ</small></p>
                    <p><small>тел.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+375 17 388 01 34 <br>тел/факс&nbsp;+375 17 388 01 35 <br> gsm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+375 29 381 43 81</small></p>
                </div>
                <div class="col-lg-4">
                    <p><small>ВРЕМЯ&nbsp; РАБОТЫ</small></p>
                    <p> <small>Понедельник-пятница, 9.30 - 18.00<br/>Запись на встречу - по договоренности<br/>на время удобное для Клиента </small></p><br>
                    <p><small>E-MAIL</small></p>
                    <p> <small>Для клиентов&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- cyrus@gmail.com<br/>Для подписчиков - infocyrus@gmail.com<br/>Для резюме&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - zrblkmv@gmail.com</small>
                    </p>
                </div>
            </div><!--/row -->
            <div class = "authors" align="center">
                <p>© Агентство праздников 2015. Все права защищены. | Зера и КО </p>
                <img src="<?= Yii::getAlias('@web'); ?>/img/sm.png" width = "150" height = "30">
            </div>
        </div><!-- /container -->
    </div>
        <script>
            $(function(){
                $.stellar({
                    horizontalScrolling: false,
                    verticalOffset: 40
                });
            });
        </script>
        <script type="text/javascript">
            $(function() {
              //    fancybox
                jQuery(".fancybox").fancybox();
            });
       </script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
