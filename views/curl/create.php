<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Uzer $model */

$this->title = 'Create Uzer';
$this->params['breadcrumbs'][] = ['label' => 'Uzers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uzer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
