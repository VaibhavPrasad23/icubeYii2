<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\Account $model */



use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';

// <?= Html::img('@web/image/1.jpg', ['alt'=>'some', 'class'=>'thing']);

?>

<?= Html::img('@web/image/rabb.png', ['alt'=>'Rabbit', 'class'=>'rabbit']); ?>


<div class="site-login">
    <h1 id="vaah"><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="account-form">
        
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                    'inputOptions' => ['class' => 'col-lg-3 form-control'],
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                ],
            ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>
  
            

            <div class="form-group">
                <div class="logbutton">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
            </div>

            <?php ActiveForm::end(); ?>


            
        <?= Html::a('Create Account', ['signup'], ['class' => 'btn btn-success', 'style' => 'margin-left: unset']) ?>
    


        </div>
    </div>



    
</div>


<img src="\image\monkey.png" alt="Monkey" class="monk">
