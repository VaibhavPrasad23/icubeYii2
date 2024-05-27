<?php

namespace app\components;


use yii;
use yii\base\ActionFilter;





// class myBehavior extends ActionFilter{



//         public function beforeAction($action)
//         {   
//             $session = yii::$app->session;
//             $session->open();
//             $session->get('username' === 'zoo');


//         }

// }


class MyBehavior extends ActionFilter
{
    // public $prop1;

    // private $_prop2;

    // public function getProp2()
    // {
        
    //     return $this->_prop2;
    // }

    // public function setProp2($value)
    // {
    //     $this->_prop2 = $value;
    //     echo $this->_prop2;
    //     die;
    // }



        public function setSessionz($cal){

            $session = Yii::$app->session;  
            $cal = $session->has('Username')?'logged in':'logged out';
            $getcal = $session->get('Username');
            echo $cal.' '.$getcal;
            
            if($getcal === 'zoo'){
                return [];
            }
            else 
            {
                Yii::$app->response->redirect(['site/login'])->send();
                exit;
            }

            
        }


    
}