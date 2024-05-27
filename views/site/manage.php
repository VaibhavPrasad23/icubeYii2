<?php

use app\models\Account;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Accounts';
?>
<div class="account-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'idaccount',
            'name',
            'username',
            'password',
            [
                'attribute' => 'idrole',
                'label' => 'Role',
            ],
            //'idcompany',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Account $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idaccount' => $model->idaccount]);
                 }
            ],
        ],
    ]); ?>


</div>
