<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\HomeAsset;
use yii\helpers\Url;
use app\widgets\WLang;
use app\models\User;
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
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <?php if(Yii::$app->session->hasFlash('success')){ ; ?>
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <?php echo Yii::$app->session->getFlash('success'); ?>
                        </div>
                    <?php } ?>
                    <?php if(Yii::$app->session->hasFlash('error')){ ; ?>
                        <div class="alert alert-error">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <?php echo Yii::$app->session->getFlash('error'); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

        <!-- Menu -->
    <nav class="menu" id="theMenu">
        <div class="menu-wrap">
            <h1 class="logo"><a href="<?php echo Url::toRoute('/site/index'); ?>#home">CYRUS STUDIO</a></h1> <br>
            <i class="fa fa-times menu-close"></i>
            <a href="<?php echo Url::toRoute('/site/index'); ?>" class="smoothScroll"><?= Yii::t('app', 'Главная') ?></a>
            <a href="<?php echo Url::toRoute('/site/index'); ?>#about" class="smoothScroll"><?= Yii::t('app', 'О нас') ?></a>
            <a href="<?php echo Url::toRoute('/site/index'); ?>#portfolio" class="smoothScroll"><?= Yii::t('app', 'Портфолио') ?></a>
            <a href="<?php echo Url::toRoute('/site/news'); ?>" class="smoothScroll"><?= Yii::t('app', 'Новости') ?></a>
            <a href="<?php echo Url::toRoute('/site/our-services'); ?>" class="smoothScroll"><?= Yii::t('app', 'Услуги') ?></a>
            <a href="<?php echo Url::toRoute('/site/contact'); ?>" class="smoothScroll"><?= Yii::t('app', 'Контакты') ?></a>
            <a href="<?php echo Url::toRoute('/site/order-form'); ?>" class="smoothScroll"><?= Yii::t('app', 'Оформить заказ') ?></a>
            <?php if(Yii::$app->user->isGuest) { ?>
                <a href="<?php echo Url::toRoute('/main/reg'); ?>" class="smoothScroll"><?= Yii::t('app', 'Регистрация') ?></a>
            <?php } ?>
            <?php if(Yii::$app->user->getIdentity()){
                    if (Yii::$app->user->getIdentity()->role === User::ROLE_ADMIN  || Yii::$app->user->getIdentity()->role === User::ORGANIZATOR) { ?>
                        <a href="<?php echo Url::toRoute('/admin/control-panel'); ?>" class="smoothScroll"><?= Yii::t('app', 'Панель управления') ?></a>
            <?php } }?>
            <?php if(Yii::$app->user->isGuest) {
                $url = Url::toRoute("/site/login");
                echo '<a href="' . $url . '" class="smoothScroll">'.  Yii::t('app', 'Войти').'</a>';
            } else {
                $url =  Url::toRoute("/site/logout");
                echo '<a data-method = "post" href="' . $url . '" class="smoothScroll"> '. Yii::t('app', 'Выйти') . '(' . Yii::$app->user->identity->user_name . ')</a>';
            }
            ?>
            <?= WLang::widget();?>
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
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <ddiv class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="bg">
                    <img class="first-slide img.bg" src="<?= Yii::getAlias('@web'); ?>/img/24.jpg" alt="First slide" >
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>CYRUS STUDIO</h1>
                                <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                                <br> <br> <p> <a class="smoothScroll" href="#about">НАЖМИ МЕНЯ</a> <span class="glyphicon glyphicon-chevron-down"></span></p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="item">
                    <div class="bg">
                    <img class="second-slide img.bg" src="<?= Yii::getAlias('@web'); ?>/img/25.jpg" alt="Second slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>CYRUS STUDIO</h1>
                                <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                                <br> <br> <p> <a class="smoothScroll" href="#about">НАЖМИ МЕНЯ</a> <span class="glyphicon glyphicon-chevron-down"></span></p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="item">
                    <div class="bg">
                    <img class="third-slide img.bg" src="<?= Yii::getAlias('@web'); ?>/img/26.jpg" alt="Third slide">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>CYRUS STUDIO</h1>
                            <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                            <br> <br> <p> <a class="smoothScroll" href="#about">НАЖМИ МЕНЯ</a> <span class="glyphicon glyphicon-chevron-down"></span></p>
                        </div>
                    </div>
                    </div>
                </div>
        </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
        <!--<div class="container">
            <div class="row">
                <div class="la" align="center">
                    <h1 align="center"> CYRUS STUDIO</h1>
                </div>
            </div><!--/row
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
                <div class="col-lg-6 col-md-6 col-xs-6" id = "border">
                    <p><small><?= Yii::t('app', 'АДРЕС') ?></small></p>
                    <p><small>г. Севастополь, Общежитий  №3 <br> ул. Университетская 26, ком. 341, этаж 4</small></p><br><br>
                    <p><small><?= Yii::t('app', 'КОНТАКТНЫЕ&nbsp; ТЕЛЕФОНЫ') ?></small></p>
                    <p><small>тел.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+375 17 388 01 34 <br>тел/факс&nbsp;+375 17 388 01 35 <br> gsm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+375 29 381 43 81</small></p>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6" id = "border1">
                    <p><small><?= Yii::t('app', 'ВРЕМЯ&nbsp; РАБОТЫ') ?></small></p>
                    <p> <small><?= Yii::t('app', 'Понедельник-пятница,') ?> 9.30 - 18.00<br/><?= Yii::t('app', 'Запись на встречу - по договоренности') ?> <br/><?= Yii::t('app', 'на время удобное для Клиента') ?> </small></p><br>
                    <p><small>E-MAIL</small></p>
                    <p> <small><?= Yii::t('app', 'Для клиентов') ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- cyrus@gmail.com<br/>Для подписчиков - infocyrus@gmail.com<br/>Для резюме&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - zrblkmv@gmail.com</small>
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
