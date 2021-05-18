<?php


namespace app\controllers;


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
                        'actions' => ['*'],
                        'allow' => false,
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

    public function actionPage1()
    {
        return $this->render('page1');
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
}