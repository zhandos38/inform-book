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

<div class="page-wrapper org-theme toggled">
    <a id="show-sidebar" class="btn btn-sm" href="#">
        <i class="ti-angle-double-right"></i>
    </a>
    <!-- ======================
 sidebar-wrapper
 ====================== -->
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <div class="sidebar-brand">
                <a href="/">ОҚМПУ</a>
                <div id="close-sidebar">
                    <i class="ti-close"></i>
                </div>
                <!-- end of close-sidebar -->
            </div>
            <!-- end of sidebar-brand -->
            <!-- sidebar-search  -->
            <!-- ======================
 sidebar-menu
 ====================== -->
            <div class="sidebar-menu">
                <ul>
                    <li class="side-list"><a href="<?= Url::to(['book/page1']) ?>">Virtual and augmented reality</a></li>
                    <li class="side-list"><a href="<?= Url::to(['book/page2']) ?>">Types of operating system</a></li>
                    <li class="side-list"><a href="<?= Url::to(['book/page3']) ?>">Encryption</a></li>
                    <li class="side-list"><a href="<?= Url::to(['book/page4']) ?>">Software</a></li>
                    <li class="side-list"><a href="<?= Url::to(['book/page5']) ?>">Main memory</a></li>
                    <li class="side-list"><a href="<?= Url::to(['book/page6']) ?>">Networks</a></li>
                    <li class="side-list"><a href="<?= Url::to(['book/page7']) ?>">Database</a></li>
                    <li class="side-list"><a href="<?= Url::to(['book/page8']) ?>">Algorithms</a></li>
                    <li class="side-list"><a href="<?= Url::to(['book/page9']) ?>">The Internet</a></li>
                    <li class="side-list"><a href="<?= Url::to(['book/page10']) ?>">Algorithms. Flowchart</a></li>
                    <li class="side-list"><a href="<?= Url::to(['book/page11']) ?>">Cyber security</a></li>
                    <li class="side-list"><a href="<?= Url::to(['book/page12']) ?>">Programming techniques</a></li>
                </ul>
            </div>
            <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-content  -->
    </nav>
    <main class="page-content">

        <!--=============================
    doc-head-section
    =============================-->
        <div class="doc-head-section">
            <div class="header">
                <?= \app\widgets\NavWidget::widget() ?>
            </div>
            <!-- end of header -->
        </div>
        <!-- end of doc-head-section -->

        <!-- =============================
    main-content
    =============================-->
        <div class="clearfix main-content">
            <div class="content-section">
                <?= $content ?>
            </div>
            <!-- end of content-section -->
        </div>
        <!-- end of main-content -->

        <!--=============================
    chat-box
    =============================-->
        <div id="body">
            <div id="chat-circle" class="btn btn-raised">
                <div id="chat-overlay"></div>
                <i class="ti-location-arrow"></i>
            </div>

            <div class="chat-box">
                <div class="chat-box-header">
                    ChatBox
                    <span class="chat-box-toggle"><i class="ti-close"></i></span>
                </div>
                <div class="chat-box-body">
                    <div class="chat-box-overlay">
                    </div>
                    <div class="chat-logs">

                    </div>
                    <!--chat-log -->
                </div>
                <div class="chat-input">
                    <form>
                        <input type="text" id="chat-input" placeholder="Send a message..." />
                        <button type="submit" class="chat-submit" id="chat-submit"><i class="ti-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- end of chat box -->

        <!-- =============================
    footer
    =============================-->
        <footer>
            <ul>
                <li><a href="#">Getting Started</a>
                </li>
                <li><a href="#">Layout</a>
                </li>
                <li><a href="#">Content</a>
                </li>
                <li><a href="#">Components</a>
                </li>
                <li><a href="#">Utilities</a>
                </li>
            </ul>
        </footer>
        <!-- end of footer -->

        <div class="color-palette">
            <a id="color-bar"><i class="ti-settings"></i></a>
            <h4>Theme</h4>
            <ul class="clearfix">
                <li>
                    <a href="#" id="blue-wlt"></a>
                </li>
                <li>
                    <a href="#" id="gradient-wlt"></a>
                </li>
                <li>
                    <a href="#" id="green-wlt"></a>
                </li>
                <li>
                    <a href="#" id="red-wlt"></a>
                </li>
                <li>
                    <a href="#" id="img-wlt"></a>
                </li>
            </ul>
        </div>

    </main>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
