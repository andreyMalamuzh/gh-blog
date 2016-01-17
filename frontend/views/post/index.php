<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Посты';
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="col-sm-8 post-index">

    <?php
    foreach ($dataProvider->models as $post) {
        echo $this->render('shortView', [
            'model' => $post
        ]);
    }
    ?>
    </div>