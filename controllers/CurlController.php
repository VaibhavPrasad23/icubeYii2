<?php

namespace app\controllers;

use app\models\Uzer;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\SignupForm;
use app\models\SpecuserForm;

use app\models\LoginForm;
use Yii;
use yii\web\Response;
use yii\base\DynamicModel;
use app\models\User1;

use function PHPUnit\Framework\isEmpty;

/**
 * CurlController implements the CRUD actions for Uzer model.
 */
class CurlController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }



     private function CurlGenerator($url, $method, $data = null)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_POST, true);
      

        if ($data !== null) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        }

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

     public function actioncurl($url, $method = 'GET', $data = null)
    {
        $curl = curl_init($url);
        
        curl_setopt_array($curl, array(
            
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Content-Type: application/json'
            ),
        ));
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        
       curl_exec($curl);
        
        curl_close($curl);
        
    }










    /**
     * Lists all Uzer models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Uzer::find(),

        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Uzer model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Uzer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */

     
    /**
     * Updates an existing Uzer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Uzer model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Uzer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Uzer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Uzer::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }





    public function  actionSignupcurl()
    { 
       

        
        $model = new SignupForm();
   
        if ($model->load(Yii::$app->request->post())&& $model->signup() ) 
        {
            //  $this->actionCreate();
            return $this->redirect('index');
        }
        
      
        
        $model->username = '';
        $model->password = '';
     
        return $this->render('signup1',['model'=>$model]);
    }

 
    
   

    public function actionShowallusers()
    {      
        
        $data = $this->CurlGenerator('http://localhost:8090/api/web/messages/dball', 'GET', null);


            echo '<pre>Database All Entries <br>';
            echo json_encode(json_decode($data, true), JSON_PRETTY_PRINT);
            // echo $data;
            echo '</pre>';

  
    }



    public function  actionSignedup()
    { 
        $session = Yii::$app->session;
        if (!Yii::$app->user->isGuest) 
        {
            return $this->goBack();
        }
        
        $model = new SignupForm();
        if (Yii::$app->session->get('username')==null)
        {
        if ($model->load(Yii::$app->request->post())&& $model->signup() ) 
        {
            $session->open();
            return $this->redirect('index');
        }
        }
        else
        {
           
            return $this->redirect('index');
        }
        
        $model->username = '';
        $model->password = '';
     
        return $this->render('signup1',['model'=>$model]);
    }



    //////////////////////////////



    public function actionSpeci(){
        $funcc = New SpecuserForm();
        $username = Yii::$app->request->post('username');
        $id = Yii::$app->request->post('id');
        $model = new SpecuserForm(['username' => $username, 'id' => $id]);
        if ($model->load(Yii::$app->request->post())) {
            $mode = isEmpty($model->username);
            if($mode==true){
                return $funcc->callSpecuserID($model->id);
            }else{
                return $funcc->callSpecuser($model->username);
            }

        }
        return $this->render('signup12',['model'=>$model]);

    }
    

    

    
  

    

}
