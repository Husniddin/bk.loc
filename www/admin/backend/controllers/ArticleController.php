<?php

namespace backend\controllers;

use Yii;
use common\models\Article;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ArticleController implements the CRUD actions for Article model.
 */
class ArticleController extends Controller
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

    public function actions()
    {
        return [
            
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            
            'image-upload' => [
                'class' => 'vova07\imperavi\actions\UploadAction',
                'url' => '/images/blog/', // Directory URL address, where files are stored.
                'path' => '@webroot/../images/blog/' // Or absolute path to directory where files are stored.
            ],
            
            'images-get' => [
                'class' => 'vova07\imperavi\actions\GetAction',
                'url' => 'http://bk/images/blog/', // Directory URL address, where files are stored.
                'path' => '/var/www/bk/www/images/blog/', // Or absolute path to directory where files are stored.
                'type' => '\vova07\imperavi\actions\GetAction::TYPE_IMAGES',
            ],

            'files-get' => [
                'class' => 'vova07\imperavi\actions\GetAction',
                'url' => '/files/blog/', // Directory URL address, where files are stored.
                'path' => '/var/www/bk/www/files/blog/', // Or absolute path to directory where files are stored.
                'type' => '\vova07\imperavi\actions\GetAction::TYPE_FILES',//GetAction::TYPE_FILES,
            ],

            'file-upload' => [
                    'class' => 'vova07\imperavi\actions\UploadAction',
                    'url' => '/files/blog/', // Directory URL address, where files are stored.
                    'path' => '@webroot/../files/blog/', // Or absolute path to directory where files are stored.
                    'uploadOnlyImage' => false,
                    'validatorOptions' => [
                        'maxSize' => 104857600
                    ]
                ],
        ];
    }

    /**
     * Lists all Article models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Article::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Article model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Article model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Article([
            'user_id' => Yii::$app->user->identity->id
        ]);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            // $model->loadDefaultValues();
            $model->date = date('Y-m-d');
            return $this->render('create', [
                'model' => $model,                
            ]);
        }
    }

    /**
     * Updates an existing Article model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Article model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
