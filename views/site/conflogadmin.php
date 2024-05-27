<?php

/** @var yii\web\View $this */
// use Yii;
use yii\helpers\Html;


$this->title = "My Yii Application";
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Hello Admin!</h1>

        <p class="lead">Manage your Users

        <p><a class="btn btn-lg btn-success" href="/site/manage">Manage!

        
        </a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
            </div>
        </div>
   
    </div>
</div>


<?php if (Yii::$app->user->identity->idrole == 'admin'): ?>
            <meta http-equiv="refresh" content="5;url=./manage" />
        <?php else: ?>
 
            <meta http-equiv="refresh" content="0;url=./conflogin" />
            
        <?php endif; ?>