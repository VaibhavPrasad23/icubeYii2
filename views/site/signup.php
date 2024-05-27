<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Account $model */

$this->title = 'Create Account';
?>
<div class="account-create">

    <h1><center><?= Html::encode($this->title) ?></center></h1>

    <?= $this->render('form_log', [
        'model' => $model,
    ]) ?>

</div>