<?php

namespace app\controllers;

use Yii;
use app\models\Eventreports;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EventreportsController implements the CRUD actions for Eventreports model.
 */
class EventreportsController extends Controller
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
     * Lists all Eventreports models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Eventreports::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Eventreports model.
     * @param string $reportNumber
     * @param string $eventNumber
     * @return mixed
     */
    public function actionView($reportNumber, $eventNumber)
    {
        return $this->render('view', [
            'model' => $this->findModel($reportNumber, $eventNumber),
        ]);
    }

    /**
     * Creates a new Eventreports model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Eventreports();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'reportNumber' => $model->reportNumber, 'eventNumber' => $model->eventNumber]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Eventreports model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $reportNumber
     * @param string $eventNumber
     * @return mixed
     */
    public function actionUpdate($reportNumber, $eventNumber)
    {
        $model = $this->findModel($reportNumber, $eventNumber);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'reportNumber' => $model->reportNumber, 'eventNumber' => $model->eventNumber]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Eventreports model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $reportNumber
     * @param string $eventNumber
     * @return mixed
     */
    public function actionDelete($reportNumber, $eventNumber)
    {
        $this->findModel($reportNumber, $eventNumber)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Eventreports model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $reportNumber
     * @param string $eventNumber
     * @return Eventreports the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($reportNumber, $eventNumber)
    {
        if (($model = Eventreports::findOne(['reportNumber' => $reportNumber, 'eventNumber' => $eventNumber])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
