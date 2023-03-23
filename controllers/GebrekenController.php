<?php

namespace app\controllers;

use app\models\Gebreken;
use app\models\GebrekenSearch;
use app\models\Projecten;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * GebrekenController implements the CRUD actions for Gebreken model.
 */
class GebrekenController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Gebreken models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $projecten = Projecten::find()->all();
        $searchModel = new GebrekenSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'projecten' => $projecten,
        ]);
    }

    /**
     * Displays a single Gebreken model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $projecten = Projecten::find()->all();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'projecten' => $projecten,
        ]);
    }

    /**
     * Creates a new Gebreken model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Gebreken();
        $projecten = Projecten::find()->all();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
            $model->gebreek_foto = UploadedFile::getInstance($model, 'gebreek_foto');
            if ($model->gebreek_foto) {
                $fileName = $model->gebreek_foto->baseName . '.' . $model->gebreek_foto->extension;
                $model->gebreek_foto->saveAs('gebreekfotos/' . $fileName);
                $model->gebreek_foto = $fileName;
            }
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
            'projecten' => $projecten,
        ]);
    }

    /**
     * Updates an existing Gebreken model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $projecten = Projecten::find()->all();
        
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
            $model->gebreek_foto = UploadedFile::getInstance($model, 'gebreek_foto');
            if ($model->gebreek_foto) {
                $fileName = $model->gebreek_foto->baseName . '.' . $model->gebreek_foto->extension;
                $model->gebreek_foto->saveAs('gebreekfotos/' . $fileName);
                $model->gebreek_foto = $fileName;
            }
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
            'projecten' => $projecten,
        ]);
    }

    /**
     * Deletes an existing Gebreken model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Gebreken model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Gebreken the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Gebreken::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
