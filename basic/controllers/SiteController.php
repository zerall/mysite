<?php

namespace app\controllers;

use app\models\Animservices;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Event1;
use app\models\Clients;
use app\models\Services;
use app\models\Orders;
use app\models\Eventservices;

use yii\data\ActiveDataProvider;

class SiteController extends Controller
{
    public $layout = 'home';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionOrderForm()
    {
        $model = new Event1;
        $clientModel = new Clients;
        $serviceModel = new Services;
        $orderModel = new Orders;

        // данные в $model удачно проверены
        if ($model->load(Yii::$app->request->post()) && $model->validate() &&
            $clientModel->load(Yii::$app->request->post()) && $clientModel->validate() ) {

            $connection = \Yii::$app->db;
            $transaction = $connection->beginTransaction();

            try {
                $model->save();
                $clientModel->save();



                $orderModel->eventNumber = $model->eventNumber;
                $orderModel->clientNumber = $clientModel->clientNumber;
                $orderModel->orderDate = date("Y-m-d H:i:s");
                $orderModel->save();
                //.... other SQL executions
                $transaction->commit();
            } catch (Exception $e) {
                $transaction->rollBack();
                return $this->render('order_form', ['model' => $model, 'clientModel' => $clientModel, 'serviceModel' => $serviceModel]);
            }
            // делаем что-то полезное с $model ...
             return $this->render('entry-confirm');

 
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('order_form', ['model' => $model, 'clientModel' => $clientModel, 'serviceModel' => $serviceModel]);
        }
    }

    public function actionOurServices()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Services::find(),
        ]);

        return $this->render('services', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionNews()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Event1::find(),
        ]);

        return $this->render('news', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAnimServices()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Animservices::find(),
        ]);

        return $this->render('anim_serv', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAnimControl()
    {

        return $this->render('anim_control');
    }

    public function actionPortfolio()
    {

        return $this->render('photo');
    }


}
