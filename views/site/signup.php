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
        <label>Зарегистрироватся</label> <a href="<?= Url::to(['site/login']) ?>">Войти</a>
    </div>
    <div>

        <?php $form = ActiveForm::begin([
            'id' => 'signup-form',
            'fieldConfig' => [
                'template' => "{label}\n<div class='form-group'>{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                'labelOptions' => ['class' => 'col-lg-1 control-label'],
            ],
        ]); ?>

        <?= $form->field($model, 'username')->textInput(['placeholder' => 'Логин'])->label(false) ?>

        <?= $form->field($model, 'email')->textInput(['placeholder' => 'email'])->label(false) ?>

        <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Пароль'])->label(false) ?>

        <?= $form->field($model, 'password_repeat')->passwordInput(['placeholder' => 'Повторите пароль'])->label(false) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Зарегистрироватся', ['class' => 'login-btn', 'name' => 'login-button']) ?>
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
