<?php

namespace app\controllers;

use app\components\myBehavior;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Account;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;



/**
 * SiteController implements the CRUD actions for Account model.
 */
class SiteController extends Controller
{
    /**
     * @inheritDoc
     */
    
  

    public function actionIndex()
    {
        
        return $this->render('index');
    }
    /**
     * Lists all Account models.
     *
     * @return string
     */




    public function actionManage()
    {
        
        if(in_array(Yii::$app->session->get('Username'), ['zoo', 'admin'], true)) {
        $dataProvider = new ActiveDataProvider([
            'query' => Account::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'idaccount' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('manage', [
            'dataProvider' => $dataProvider,
        ]);}

        else  return $this->render('index');
    
    }











    /**
     * Displays a single Account model.
     * @param int $idaccount Idaccount
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idaccount)
    {   
        if (in_array(Yii::$app->session->get('Username'), ['zoo', 'admin'], true)) {
        return $this->render('view', [
            'model' => $this->findModel($idaccount),
        ]);}
        else return $this->render('index');
    }







    /**
     * Creates a new Account model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
            if(Yii::$app->session->get('Username') === 'admin') {
        $model = new Account();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idaccount' => $model->idaccount]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

        else return $this->render('index');}









    /**
     * Updates an existing Account model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * 
     * @param int $idaccount Idaccount
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idaccount)
    {
        if (in_array(Yii::$app->session->get('Username'), ['zoo', 'admin'], true)) 
        {
            $model = $this->findModel($idaccount);

            if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) 
                return $this->redirect(['view', 'idaccount' => $model->idaccount]);
            
            return $this->render('update', [
            'model' => $model,
            ]);
        }
            
        return $this->render('index');
    }






    /**
     * Deletes an existing Account model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idaccount Idaccount
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idaccount)
    {
        $this->findModel($idaccount)->delete();

        return $this->redirect(['index']);
    }







    /**
     * Finds the Account model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idaccount Idaccount
     * @return Account the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idaccount)
    {
        if (($model = Account::findOne(['idaccount' => $idaccount])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }




    



    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }



        $model = new Account();
        $model->scenario = Account::SCENARIO_LOGIN;
        
        $model = new Account(['scenario' => Account::SCENARIO_LOGIN]);
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            
            $model->password = '';
            return $this->render('conflogadmin', [
                'model' => $model,
                    ]);
                    
    
        }
        $model->password = '';

    
        return $this->render('login', [
            'model' => $model,
                ]);

    }








    public function actionConflogadmin(){
        
        if(Yii::$app->session->get('Username') === 'admin')  {
            return $this->render('conflogadmin');
        } else return $this->goHome(); 
    }


    public function actionSignup()
    {
        if (!Yii::$app->user || Yii::$app->session->has('Username')) {
            return $this->goHome();
        }

        
        $model = new Account();
        $model->scenario = Account::SCENARIO_SIGNUP;
        
        // scenario is set through configuration
        $model = new Account(['scenario' => Account::SCENARIO_SIGNUP]);

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                
                
                return $this->redirect(['index', 'name' => $model->name]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('signup', [
            'model' => $model,
                ]);
            
    }




    public function actionLogout()
    {
        Yii::$app->session->removeAll();
        Yii::$app->session->destroy();
        Yii::$app->user->logout();
        
        return $this->goHome();
    }


    public function actionConflog(){

        return $this->render('conflog');
    }


    public function actionConflogin()
    {
        return $this->render('conflogin');
    }


   


    public function actionZoo(){
 
        if (Yii::$app->session->get('Username') === 'zoo') {
            return $this->render('zoo');    
        }
        else  return $this->render('index');
    }






}
