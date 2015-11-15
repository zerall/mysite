<?php
/**
 * Created by PhpStorm.
 * User: Зера
 * Date: 14.11.2015
 * Time: 15:11
 */
namespace app\controllers;

use Yii;
use app\models\RegForm;
use app\models\LoginForm;
use app\models\User;
use app\models\Profile;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\helpers\Html;
use yii\helpers\Url;
class MainController extends BehaviorsController
{
    public $layout = 'home';
    public $defaultAction = 'index';
    public function actionIndex()
    {
        $hello = 'Привет МИР!!!';
        return $this->render(
            'index',
            [
                'hello' => $hello
            ]);
    }
    public function actionProfile()
    {
        $model = ($model = Profile::findOne(Yii::$app->user->id)) ? $model : new Profile();
        if($model->load(Yii::$app->request->post()) && $model->validate()):
            if($model->updateProfile()):
                Yii::$app->session->setFlash('success', 'Профиль изменен');
            else:
                Yii::$app->session->setFlash('error', 'Профиль не изменен');
                Yii::error('Ошибка записи. Профиль не изменен');
                return $this->refresh();
            endif;
        endif;
        return $this->render(
            'profile',
            [
                'model' => $model
            ]
        );
    }
    public function actionReg()
    {

        $model = new RegForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()):
            if ($user = $model->reg()):
                Yii::$app->session->setFlash('success', 'Спасибо за регистрацию!');
                if ($user->role === User::USER):
                    if (Yii::$app->getUser()->login($user)){
                        return $this->goHome();
                    } else {
                        return $this->refresh();
                    }
                endif;
            else:
                Yii::$app->session->setFlash('error', 'Возникла ошибка при регистрации.');
                Yii::error('Ошибка при регистрации');
                return $this->refresh();
            endif;
        endif;
        return $this->render(
            'reg',
            [
                'model' => $model
            ]
        );
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(['/main/index']);
    }
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest):
            return $this->goHome();
        endif;
        $loginWithEmail = Yii::$app->params['loginWithEmail'];
        $model = $loginWithEmail ? new LoginForm(['scenario' => 'loginWithEmail']) : new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()):
            return $this->goBack();
        endif;
        return $this->render(
            'login',
            [
                'model' => $model
            ]
        );
    }
    public function actionSearch()
    {
        $search = Yii::$app->session->get('search');
        Yii::$app->session->remove('search');
        if ($search):
            Yii::$app->session->setFlash(
                'success',
                'Результат поиска'
            );
        else:
            Yii::$app->session->setFlash(
                'error',
                'Не заполнена форма поиска'
            );
        endif;
        return $this->render(
            'search',
            [
                'search' => $search
            ]
        );
    }

}