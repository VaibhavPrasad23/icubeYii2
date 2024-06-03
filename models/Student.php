<?php

namespace app\models;
use yii\db\Query;
use Yii;
/**
 * This is the model class for table "student".
 *
 * @property int $idaccount
 * @property string $name
 * @property string|null $username
 * @property string $password
 * @property string|null $idrole
 * @property string $idcomany
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'account';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone_no', 'password'], 'required'],
            [['name'], 'string', 'max' => 40],
            [['email'], 'string', 'max' => 20],
            [['phone_no'], 'string', 'max' => 14],
            [['profile_pic', 'password'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone_no' => 'Phone No',
            'profile_pic' => 'Profile Pic',
            'password' => 'Password',
        ];
    }

    public function getData(){

        
        //------- insert ----------------//

      /*    $sql = Yii::$app->db->createCommand()->insert('student',
         [
            'name'=>'test data',
            'email'=>'testdata@gmail.com',
            'phone_no'=>'9898989890',
            'profile_pic'=>'test.jpg',
            'password'=>'1234',
         ])->execute();   
        $lastId =  Yii::$app->db->getLastInsertID();
        echo $lastId; */

        // ---------  Update ----------//

       /*  $sql = Yii::$app->db->createCommand()->update('student',
         [
            'name'=>'demo1 data',
            'email'=>'testdata@gmail.com',
            'phone_no'=>'9898989890',
            'profile_pic'=>'test.jpg',
            'password'=>'1234',
         ],'id=:id',array(':id'=>22))->execute();   */

         //------ delete --------------///

        //$sql = Yii::$app->db->createCommand()->delete('student','id=:id',array(':id'=>22))->execute();

     /*    $sql = Yii::$app->db->createCommand()->delete('student',array('id'=>21))->execute(); */


         //------ select ---------//

         /* $query = (new Query())
         ->select('student.*')
         ->from('student')
          ->where( [
             'name'=>'DSSR'
         ])  
        ->all(); */ 

        //------- JOIN -------///

        $query = (new Query())
         ->select(['student.id','student.name','subject.name as subname'])
         ->from('student')
         ->innerjoin('subject as sb','sb.student_id=student.id')
          ->where( [
             'name'=>'DSSR'
         ])
        /*  ->andWhere([
            'email'=>'test@gmail.com'
         ])
         ->orWhere([
            'email'=>'test@gmail.com'
         ]) */
        /*  ->andFilterWhere([
             'or',
             ['like','student.name','test'],
             ['like','student.email','test@gmail.com']

         ]) */
         ->groupBy(['name','email'])
         ->having('id>1')
         ->orderBy('name')
         ->limit('10')
         ->offset('5')
         ;
            echo $query->createCommand()->getRawSql(); die;
        //->all();
         echo "<pre>"; print_r($query);
         echo"</pre>";
        return '11';
    }
}
