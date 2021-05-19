<?php


namespace app\controllers;


use app\models\Task;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class BookController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionPage1()
    {
        $model = new Task();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('Задача успешно отправлен');
            return $this->redirect(['site/index']);
        }

        return $this->render('page1', [
            'model' => $model
        ]);
    }

    public function actionPage2()
    {
        return $this->render('page2');
    }

    public function actionPage3()
    {
        return $this->render('page3');
    }

    public function actionPage4()
    {
        return $this->render('page4');
    }

    public function actionPage5()
    {
        return $this->render('page5');
    }

    public function actionPage6()
    {
        return $this->render('page6');
    }

    public function actionPage7()
    {
        return $this->render('page7');
    }

    public function actionPage8()
    {
        return $this->render('page8');
    }

    public function actionPage9()
    {
        return $this->render('page9');
    }

    public function actionPage10()
    {
        return $this->render('page10');
    }

    public function actionPage11()
    {
        return $this->render('page11');
    }

    public function actionPage12()
    {
        return $this->render('page12');
    }
}