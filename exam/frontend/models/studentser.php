<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\student;

/**
 * studentser represents the model behind the search form of `frontend\models\student`.
 */
class studentser extends student
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['s_id', 'c_id'], 'integer'],
            [['s_num', 's_name', 'sex', 's_card', 'status'], 'safe'],
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
        $query = student::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>[
                'pagesize'=>5
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            's_id' => $this->s_id,
            'c_id' => $this->c_id,
        ]);

        $query->andFilterWhere(['like', 's_num', $this->s_num])
            ->andFilterWhere(['like', 's_name', $this->s_name])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 's_card', $this->s_card])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
