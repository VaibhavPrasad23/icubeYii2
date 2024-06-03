<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Student;

/**
 * StudentAjax represents the model behind the search form about `app\models\Student`.
 */
class StudentAjax extends Student
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idaccount'], 'integer'],
            [['name', 'email', 'phone_no', 'profile_pic', 'password', 'created_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Student::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idaccount' => $this->idaccount,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email', $this->username])
            ->andFilterWhere(['like', 'phone_no', $this->idrole])
            ->andFilterWhere(['like', 'password', $this->password]);

        return $dataProvider;
    }
}
