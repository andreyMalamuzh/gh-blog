<?php

use common\models\Comments;
/** @var $model Comments */
?>

<div class="paragraph">
    <p><b><?= $model->author ?></b>, <?= $model->created_at ?></p>
    <p><?= $model->description ?></p>
</div>