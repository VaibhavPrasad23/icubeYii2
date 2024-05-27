<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Account $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="account-form">

    <?php $form = ActiveForm::begin(); ?>

    idaccount
    <?= $form->field($model, 'name', ['labelOptions' => ['label' => 'Your Name']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username', ['labelOptions' => ['label' => 'Username']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password', ['labelOptions' => ['label' => 'Password']])->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idrole', ['labelOptions' => ['label' => 'Your Role']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idcompany', ['labelOptions' => ['label' => 'Company']])->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
