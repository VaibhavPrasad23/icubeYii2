<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Account $model */


\yii\web\YiiAsset::register($this);
?>
<div class="account-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idaccount' => $model->idaccount], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idaccount' => $model->idaccount], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idaccount',
            'name',
            'username',
            'password',
            'idrole',
            'idcompany',
        ],
    ]) ?>

</div>
