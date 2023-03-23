<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Gebreken;

/**
 * GebrekenSearch represents the model behind the search form of `app\models\Gebreken`.
 */
class GebrekenSearch extends Gebreken
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'projecten_id', 'gebreek_kosten'], 'integer'],
            [['gebreek_info', 'gebreek_foto'], 'safe'],
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
        $query = Gebreken::find();

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
            'projecten_id' => $this->projecten_id,
            'gebreek_kosten' => $this->gebreek_kosten,
        ]);

        $query->andFilterWhere(['like', 'gebreek_info', $this->gebreek_info])
            ->andFilterWhere(['like', 'gebreek_foto', $this->gebreek_foto]);

        return $dataProvider;
    }
}
