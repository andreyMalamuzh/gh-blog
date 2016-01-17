<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use common\models\Comments;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $comments common\models\Comments */
/* @var $commentsProvider yii\data\ActiveDataProvider */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <div class="content">
        <?= $model->content ?>
    </div>
    <br>

    <div class="meta">
        <p>Автор: <b><?= $model->author->username ?></b>; Дата публикации: <?= $model->publish_date ?>; Категория: <?= Html::a($model->category->title, ['category/view', 'id' => $model->category->id]) ?></p>
    </div>

    <h4>Коментарии:</h4>
    <?= ListView::widget([
        'dataProvider' => new ActiveDataProvider([
            'query' => Comments::find()->where(['id_post' => $model->id]),
        ]),
        'itemView' => function($comments) {
            return $this->render('_comments', [
                'model' => $comments,
            ]);
        },
        'emptyText' => 'Комментариев нету'
    ]); ?>

    <h3>Добавить комментарий:</h3>

    <?= $this->render('/comments/_form', [
        'model' => $comments,
        'actionComments' => '/comments/create',
        ]) ?>

</div>
