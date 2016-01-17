<?php

use yii\helpers\Html;

/* @var $model common\models\Post */
?>

<h1><?= Html::a($model->title, ['post/view', 'id' => $model->id]) ?></h1>

<div class="content">
    <?= $model->anons ?>
</div>
<br>
<div class="meta">
    <p>Автор: <b><?= $model->author->username ?></b>; Дата публикации: <?= $model->publish_date ?>; Категория: <?= Html::a($model->category->title, ['category/view', 'id' => $model->category->id]) ?></p>
</div>
<?= Html::a('Читать далее', ['post/view', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
