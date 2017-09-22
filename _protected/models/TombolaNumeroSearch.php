<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TombolaNumero;

/**
 * app\models\TombolaNumeroSearch represents the model behind the search form about `app\models\TombolaNumero`.
 */
 class TombolaNumeroSearch extends TombolaNumero
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_tombola', 'numero_1', 'numero_2', 'numero_3', 'numero_4', 'numero_5', 'numero_6', 'numero_7', 'numero_8', 'numero_9', 'numero_10', 'numero_11', 'numero_12', 'numero_13', 'numero_14', 'numero_15', 'numero_16', 'numero_17', 'numero_18', 'numero_19', 'numero_20'], 'integer'],
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
        $query = TombolaNumero::find();

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
            'id' => $this->id,
            'id_tombola' => $this->id_tombola,
            'numero_1' => $this->numero_1,
            'numero_2' => $this->numero_2,
            'numero_3' => $this->numero_3,
            'numero_4' => $this->numero_4,
            'numero_5' => $this->numero_5,
            'numero_6' => $this->numero_6,
            'numero_7' => $this->numero_7,
            'numero_8' => $this->numero_8,
            'numero_9' => $this->numero_9,
            'numero_10' => $this->numero_10,
            'numero_11' => $this->numero_11,
            'numero_12' => $this->numero_12,
            'numero_13' => $this->numero_13,
            'numero_14' => $this->numero_14,
            'numero_15' => $this->numero_15,
            'numero_16' => $this->numero_16,
            'numero_17' => $this->numero_17,
            'numero_18' => $this->numero_18,
            'numero_19' => $this->numero_19,
            'numero_20' => $this->numero_20,
        ]);

        return $dataProvider;
    }
}
