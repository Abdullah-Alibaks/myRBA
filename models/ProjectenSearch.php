<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Projecten;

/**
 * ProjectenSearch represents the model behind the search form of `app\models\Projecten`.
 */
class ProjectenSearch extends Projecten
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'klanten_id'], 'integer'],
            [['klanten_naam', 'adres', 'nummer', 'woonplaats', 'status'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Projecten::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'klanten_id' => $this->klanten_id,
        ]);

        $query->andFilterWhere(['like', 'klanten_naam', $this->klanten_naam])
            ->andFilterWhere(['like', 'adres', $this->adres])
            ->andFilterWhere(['like', 'nummer', $this->nummer])
            ->andFilterWhere(['like', 'woonplaats', $this->woonplaats])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
