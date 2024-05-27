<?php


/** @var yii\web\View $this */

$this->title = "My Yii Application";
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully logged in .</p>

        <p><a class="btn btn-lg btn-success" href="https://giphy.com/gifs/iron-man-tony-stark-boom-xDyB4KAU7Y6qc/fullscreen">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
            </div>
        </div>
        <?php if (Yii::$app->user->identity->idrole == 'admin'): ?>
            <meta http-equiv="refresh" content="5;url=./manage" />
        <?php else: ?>
 
            <meta http-equiv="refresh" content="0;url=<?php echo Yii::$app->homeUrl; ?>" />
            
        <?php endif; ?>

    </div>
</div>

