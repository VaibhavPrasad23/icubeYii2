<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Uzer $model */

$this->title = 'Update Uzer: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Uzers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="uzer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
