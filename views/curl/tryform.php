<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap5\BootstrapAsset;

/** @var yii\web\View $this */
/** @var app\models\Uzer $model */
/** @var yii\widgets\ActiveForm $form */

BootstrapAsset::register($this);
?>
<div class="site-login">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username')->textInput() ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= Html::submitButton('Login',['class' => 'btn btn-primary btn-block']) ?>

    <?php ActiveForm::end(); ?>
</div>