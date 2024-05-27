<?php

use PhpParser\Node\Stmt\Label;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Account $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="account-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idaccount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'idrole')->radioList(
        [
            'zoo' => 'Zoo Keeper',
            'admin' => 'Admin',
        ],
        [
            'item' => function($index, $label, $name, $checked, $value) {

                $return = '<label class="btn btn-primar2">';
                $return .= Html::radio($name, $checked, ['value' => $value, 'class' => 'me-2']);
                $return .= '<span>'.$label.'</span>';
                $return .= '</label>';

                return $return;
            },
            'class' => 'btn-group',
            'data-toggle' => 'buttons',
            'unselect' => null, // remove hidden field
            'itemOptions' => [
                'labelOptions' => [
                    'class' => 'btn btn-primary'
                ]
            ]
        ])->label('Your Role:'); ?>


    <!-- <?= $form->field($model, 'idrole')->textInput(['maxlength' => true])->label('Your Role') ?> -->

    <?= $form->field($model, 'idcompany')->textInput(['maxlength' => true])->label('Company') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
