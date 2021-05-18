<?php

use yii\helpers\Url;

?>
<div class="doc-head-section">
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light with-sidebar">
            <a class="navbar-brand brand-name" href="#">VedhaDocs</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <!-- end of navbar-toggler -->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="index-2.html">Басты бет</a></li>
                    <!-- end of nav-item -->
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Профиль
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= Url::to(['site/logout']) ?>">Выйти</a>
                        </div>
                        <!-- end of dropdown-menu -->
                    </li>
                </ul>
                <!-- end of navbar-nav -->
                <!--=============================
  search-wrapper
  =============================-->
                <form class="form-inline my-2 my-lg-0">
                    <div class="search-wrapper">
                        <input class="form-control mr-sm-2" type="search" placeholder="Іздеу" aria-label="Search">
                    </div>
                </form>
                <!-- end of search-wrapper -->
            </div>
            <!-- end of collapse -->
        </nav>
        <!-- end of navbar -->
    </div>
    <!-- end of header -->
</div>