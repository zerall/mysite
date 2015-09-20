<?php

namespace app\controllers;

use Yii;
use app\models\Animservices;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AnimemployController implements the CRUD actions for Animemploy model.
 */
class AnimservicesController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Animemploy models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Animservices::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Animemploy model.
     * @param string $animNumber
     * @param string $workBookNumber
     * @return mixed
     */
    public function actionView($animNumber, $serviceNumber)
    {
        return $this->render('view', [
            'model' => $this->findModel($animNumber, $serviceNumber),
        ]);
    }

    /**
     * Creates a new Animemploy model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
   public function actionCreate()
    {
        $model = new Animservices();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'animNumber' => $model->animNumber, 'serviceNumber' => $model->serviceNumber]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    /**
     * Updates an existing Animemploy model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $animNumber
     * @param string $workBookNumber
     * @return mixed
     */
    public function actionUpdate($animNumber, $serviceNumber)
    {
        $model = $this->findModel($animNumber, $serviceNumber);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'animNumber' => $model->animNumber, 'serviceNumber' => $model->serviceNumber]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Animemploy model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $animNumber
     * @param string $workBookNumber
     * @return mixed
     */
    public function actionDelete($animNumber, $serviceNumber)
    {
        $this->findModel($animNumber, $serviceNumber)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Animemploy model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $animNumber
     * @param string $workBookNumber
     * @return Animemploy the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($animNumber, $serviceNumber)
    {
        if (($model = Animservices::findOne(['animNumber' => $animNumber, 'serviceNumber' => $serviceNumber])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
