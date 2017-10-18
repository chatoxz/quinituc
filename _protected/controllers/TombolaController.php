<?php

namespace app\controllers;

use app\models\TombolaSearch;
use Yii;
use app\models\Tombola;
use app\models\TombolaNumero;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TombolaController implements the CRUD actions for Tombola model.
 */
class TombolaController extends Controller
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
     * Lists all Tombola models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TombolaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tombola model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $tombola_numeros = TombolaNumero::findOne(['id_tombola' => $model->id ]);
        return $this->render('view', [
            'model' => $this->findModel($id),
            'tombola_numeros' => $tombola_numeros,
        ]);
    }

    /**
     * Creates a new Tombola model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tombola();

        if ($model->loadAll(Yii::$app->request->post())) {
            $model->save();
            $model['tombolaNumero']->id_tombola = $model->id;
            $model['tombolaNumero']->save();
            $tombola_numeros = TombolaNumero::findOne(['id_tombola' => $model->id ]);
            return $this->render('view', [
                'model' => $model,
                'tombola_numeros' => $tombola_numeros,
            ]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Tombola model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        //$tombolaNumero = TombolaNumero::findOne($id);

        if ($model->loadAll(Yii::$app->request->post()) ) {
            $model->save();
            $model['tombolaNumero']->id_tombola = $model->id;
            $model['tombolaNumero']->save();
            $tombola_numeros = TombolaNumero::findOne(['id_tombola' => $model->id ]);
            /*var_dump($model);
            var_dump($tombola_numeros);*/
            return $this->render('view', [
                'model' => $model,
                'tombola_numeros' => $tombola_numeros,
            ]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Tombola model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->deleteWithRelated();

        return $this->redirect(['index']);
    }


    /**
     * Finds the Tombola model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tombola the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tombola::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
