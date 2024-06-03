<?php
/** @var yii\web\View $this */

use app\models\Animal;

$model = new Animal();
if (isset($_POST['url'])) {
    $model->url = $_POST['url'];
    if ($model->validate()) {
        $model->sendRequest();
    }
}


echo \yii\widgets\ActiveForm::begin();
echo \yii\helpers\Html::textInput('url', $model->url);
echo \yii\helpers\Html::submitButton('Send');
\yii\widgets\ActiveForm::end();

?>


