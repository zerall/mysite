<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Event1;
use app\models\Services;


/* @var $this yii\web\View */
$this->title = 'Наши работы';
$this->params['breadcrumbs'][] = $this->title
?>
<!-- PORTFOLIO SECTION -->
<section id="portfolio" name="portfolio"></section>
<div id="portfoliowrap">
    <div class="containers">
        <div class="row">
            <h1>НАШИ РАБОТЫ И ПРОЕКТЫ</h1>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                <div class="project-wrapper">
                    <div class="project">
                        <div class="photo-wrapper">
                            <div class="photo">
                                <a class="fancybox" href="<?= Yii::getAlias('@web'); ?>/img/portfolio/1.jpg"><img class="img-responsive" src="<?= Yii::getAlias('@web'); ?>/img/portfolio/1.jpg" alt=""></a>
                                <p align = "center"> <span style = " text-align: center; font-size: 16px; color: white"> Свадьба Василия и Александры </span></p> <p align = "center"> <span style = " text-align: center; font-size: 16px; color: #808080"> Опишите свое фото здесь </p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div><!-- col-lg-4 -->

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                <div class="project-wrapper">
                    <div class="project">
                        <div class="photo-wrapper">
                            <div class="photo">
                                <a class="fancybox" href="<?= Yii::getAlias('@web'); ?>/img/portfolio/port03.jpg"><img class="img-responsive" src="<?= Yii::getAlias('@web'); ?>/img/portfolio/port03.jpg" alt=""></a>
                                <p align = "center"> <span style = " text-align: center; font-size: 16px; color: white"> Фестиваль Паники</span></p> <p align = "center"> <span style = " text-align: center; font-size: 16px; color: #808080"> Опишите свое фото здесь </p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div><!-- col-lg-4 -->

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                <div class="project-wrapper">
                    <div class="project">
                        <div class="photo-wrapper">
                            <div class="photo">
                                <a class="fancybox" href="<?= Yii::getAlias('@web'); ?>/img/portfolio/2.jpg"><img class="img-responsive" src="<?= Yii::getAlias('@web'); ?>/img/portfolio/2.jpg" alt=""></a>
                                <p align = "center"> <span style = " text-align: center; font-size: 16px; color: white"> День рождения </span></p> <p align = "center"> <span style = " text-align: center; font-size: 16px; color: #808080"> Опишите свое фото здесь </p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div><!-- col-lg-4 -->
        </div><!-- /row -->

        <div class="row mt">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                <div class="project-wrapper">
                    <div class="project">
                        <div class="photo-wrapper">
                            <div class="photo">
                                <a class="fancybox" href="<?= Yii::getAlias('@web'); ?>/img/portfolio/10.jpg"><img class="img-responsive" src="<?= Yii::getAlias('@web'); ?>/img/portfolio/10.jpg" alt=""></a>
                                <p align = "center"> <span style = " text-align: center; font-size: 16px; color: white"> Детский праздник </span></p> <p align = "center"> <span style = " text-align: center; font-size: 16px; color: #808080"> Опишите свое фото здесь </p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div><!-- col-lg-4 -->

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                <div class="project-wrapper">
                    <div class="project">
                        <div class="photo-wrapper">
                            <div class="photo">
                                <a class="fancybox" href="<?= Yii::getAlias('@web'); ?>/img/portfolio/port05.jpg"><img class="img-responsive" src="<?= Yii::getAlias('@web'); ?>/img/portfolio/port05.jpg" alt=""></a>
                                <p align = "center"> <span style = " text-align: center; font-size: 16px; color: white"> Народные гуляния</span></p> <p align = "center"> <span style = " text-align: center; font-size: 16px; color: #808080"> Опишите свое фото здесь </p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div><!-- col-lg-4 -->

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                <div class="project-wrapper">
                    <div class="project">
                        <div class="photo-wrapper">
                            <div class="photo">
                                <a class="fancybox" href="<?= Yii::getAlias('@web'); ?>/img/portfolio/port02.jpg"><img class="img-responsive" src="<?= Yii::getAlias('@web'); ?>/img/portfolio/port02.jpg" alt=""></a>
                                <p align = "center"> <span style = " text-align: center; font-size: 16px; color: white"> Фестиваль Красок </span></p> <p align = "center"> <span style = " text-align: center; font-size: 16px; color: #808080"> Опишите свое фото здесь </p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div><!-- col-lg-4 -->
        </div><!-- /row -->
    </div><!--/container -->