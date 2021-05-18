<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<section class="login-wrapper">
    <div class="login-left-wrapper">
        <div class="login-content-inner-wrapper">
            <h3>ЮКГПУ</h3>
            <?= $content ?>
        </div>
    </div>
    <div class="login-right-wrapper">
        <div class="login-right-inner">
            <h1>VedhaDocs is the <span>Key to your</span><span>Success</span><span>Ensure Consent</span><span>expectations</span></h1>
            <p>Documentation help ensure consent and expectations. It helps to tell the narrative for decisions made, and how yourself or the client responded to different situations. In this same manor, it is important to record information that can help support the proper treatment plan and the reasoning for such services</p>
        </div>
    </div>
</section>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
