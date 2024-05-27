<?php

use app\models\Account;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Accounts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Account', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idaccount',
            'name',
            'username',
            'password',
            'idrole',
            //'idcompany',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Account $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idaccount' == $action ? 'idaccount' : 'username' => $model->{$action == 'view' ? 'idaccount' : 'username'}]);
                 }
            ],
        ],
    ]); ?>


</div>
