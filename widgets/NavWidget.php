<?php


namespace app\widgets;


use yii\base\Widget;

class NavWidget extends Widget
{
    public function run()
    {
        return $this->render('nav');
    }
}