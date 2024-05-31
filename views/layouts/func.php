<?php

/** @var yii\web\View $this */
/** @var string $content */

use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\ArrayHelper;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Animal;
use app\components\myBehavior;

function adminLog(){
    Yii::$app->session->set("Username", "admin");
    NavBar::begin([
        'brandLabel' => "Welcome",
        'brandUrl' => ['/site/conflogadmin'],
        'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            
            ['label' => 'Home', 'url' => ['/site/conflogadmin']],
            ['label' => 'Manage', 'url' => ['/site/manage']],
            ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                'url' => ['/site/logout'],
                'linkOptions' => ['data-method' => 'post']
            ],
        ]           
    ]);
}

function zooPeop(){

        Yii::$app->session->set("Username", "zoo");
        NavBar::begin([
            'brandLabel' => Html::img('@web/image/zoo.svg', ['alt'=>'Zoo']),
            'brandUrl' => ['/site/conflogin'],
            'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                
                ['label' => 'Home', 'url' => ['/site/conflogin']],
                ['label' => 'Zoo News', 'url' => ['/site/zoo']],     
                ['label' => 'Animals', 'url' => ['/animal/index']], 
                ['label' => 'Update Animals', 'items' => array_map(
                    function($element) {
                        return ['label' => $element['name'], 'url' => ['/animal/update', 'ID' => $element['ID']]];
                    },
                    ArrayHelper::toArray(Animal::find()->all())
                )],


                      
  
                ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ],
            ]           
        ]);
        
}


function guest_page(){
    NavBar::begin([
        'brandLabel' => 'iCube Systems',
        'brandUrl' => ['/site/index'],
        'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Signup', 'url' => ['/site/signup']],

            Yii::$app->user->isGuest
                ? ['label' => 'Login', 'url' => ['/site/login']]
                : '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>',
                    ['label' => 'CurlPOST', 'url' => ['/site/signupcurl']],
        ]
    ]);

}
