<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Account $model */
/** @var yii\widgets\ActiveForm $form */
?>


<div class="account-form">

    <?php $form = ActiveForm::begin(['method' => 'post']); ?>


    <?= $form->field($model, 'id')->textInput(['name' => 'SignupForm[username]', 'autofocus' => true,'required'=>true]) ?>




    <div class="form-group">
       <?= Html::submitButton('Sign Up', ['class' => 'btn btn-success', 'name' => 'signup-button']) ?>

    </div>

    <?php ActiveForm::end(); ?>
</div>
