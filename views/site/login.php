<?php

/* @var $this yii\web\View */
/* @var $form \yii\bootstrap4\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-login">
    <div class="heading-login">
        <label>Log in</label> <a href="<?= Url::to(['site/sign-up']) ?>">Sign Up</a>
    </div>
    <div>

        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'layout' => 'horizontal',
            'fieldConfig' => [
                'template' => "{label}\n<div class='form-group'>{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                'labelOptions' => ['class' => 'col-lg-1 control-label'],
            ],
        ]); ?>

        <?= $form->field($model, 'username')->textInput(['placeholder' => 'username'])->label(false) ?>

        <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'password'])->label(false) ?>

        <?= $form->field($model, 'rememberMe')->checkbox() ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'login-btn', 'name' => 'login-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
    <!-- login-with -->
    <div class="login-with">
        <ul class="clearfix">
            <li><a href="#" class="facebook-rd"><i class="ti-facebook"></i></a></li>
            <li><a href="#" class="twitter-rd"><i class="ti-twitter"></i></a></li>
            <li><a href="#" class="linkedin-rd"><i class="ti-linkedin"></i></a></li>
        </ul>
    </div>
</div>
