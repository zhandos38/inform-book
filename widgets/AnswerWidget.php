<?php


namespace app\widgets;


use app\models\Task;
use yii\base\Widget;

class AnswerWidget extends Widget
{
    public function run()
    {
        $model = new Task();

        return $this->render('answer', [
            'model' => $model
        ]);
    }
}