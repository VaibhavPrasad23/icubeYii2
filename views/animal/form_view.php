<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Animal $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="animal-form">

    <?php $form = ActiveForm::begin([ 'options' =>['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nutrition')->textInput(['maxlength' => true]) ?>

    <?= $model->picture ? Html::img("@web/{$model->picture}", ['class' => 'img-thumbnail', 'style' => 'width:500px']). "<h6>Last image uploaded: {$model->picture} </h6>"  : $formfield($model, 'picture')->fileInput() ?>

    <?= $form->field($model, 'picture')->fileInput(['required' => false])?  : false ?>

    <?= $form->field($model, 'information', ['inputOptions' => ['class' => 'informe']])->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>



    <?php ActiveForm::end(); ?>

</div>
