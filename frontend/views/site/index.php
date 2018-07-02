<?php

use yii\widgets\ListView;
use common\widgets;
use backend\models\PostSearch;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<!--<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>-->

<div class="site-index">
    <div class="body-content">

        <div class="row">
            <div class="col-md-9" style="min-height: 600px;">
                <?php
                    echo ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_itemview',
                    ]);
                    ?>
                </div>
            <div class="col-md-3">
                <div class="panel panel-success" style="width: 100%; margin-bottom: 20px;">
                    <div class="panel-heading">
                    <h3 class="panel-title">Category</h3>
                </div>
                <div class="panel-body">
                    <?= $category ?>
                </div>
            </div>
            <div class="panel panel-success" style="width: 100%; margin-bottom: 20px;">
                <div class="panel-heading">
                    <h3 class="panel-title">Tags</h3>
                      </div>
                    <div class="panel-body">
                     ...   
                    </div>
                </div>
            </div>
        </div>
        </div>
<!--                <h2>Berita 1</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>-->
          
<!--            </div>
            <div class="col-lg-2" style="border: 1px solid" style="widht: 100%; margin-bottom: 20px">
                <h2>Category</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="row">
             <div class="col-lg-9">
                     <h2>Berita 2</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
                </div>
                <div class="col-lg-2" style="border: 1px solid" style="widht: 100%; margin-bottom: 20px">
                <h2>Tags</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>-->

