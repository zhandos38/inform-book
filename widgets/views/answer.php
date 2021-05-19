<?php

use vova07\imperavi\Widget;
use yii\bootstrap4\ActiveForm;

use yii\helpers\Url;

?>
<?php $form = ActiveForm::begin([
    'action' => ['site/answer']
])  ?>

<?= $form->field($model, 'topic') ?>

<?= $form->field($model, 'answer')->widget(Widget::className(), [
    'settings' => [
        'lang' => 'ru',
        'minHeight' => 200,
        'plugins' => [
            'clips',
            'fullscreen',
            'imagemanager',
        ],
        'imageUpload' => Url::to(['post/image-upload']),
        'imageManagerJson' => Url::to(['post/images-get']),
        'clips' => [
            ['Lorem ipsum...', 'Lorem...'],
            ['red', '<span class="label-red">red</span>'],
            ['green', '<span class="label-green">green</span>'],
            ['blue', '<span class="label-blue">blue</span>'],
        ],
    ],
]) ?>

<?= \yii\helpers\Html::submitButton('Жіберу', ['class' => 'btn btn-success']) ?>

<?php ActiveForm::end() ?>