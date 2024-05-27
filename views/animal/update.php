<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Animal $model */

$this->title = 'Update Animal: ' . $model->name;
// $this->params['breadcrumbs'][] = ['label' => 'Animals', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'ID' => $model->ID]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="animal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form_view', [
        'model' => $model,
    ]) ?>

</div>
