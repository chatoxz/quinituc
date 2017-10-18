<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NumerosVarios;

/**
 * NumerosVariosSearch represents the model behind the search form about `app\models\NumerosVarios`.
 */
class NumerosVariosSearch extends NumerosVarios
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'atrasado', 'favorito', 'fija', 'batacazo'], 'integer'],
            [['triplona', 'cuatriplona'], 'number'],
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
        $query = NumerosVarios::find();

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
            'atrasado' => $this->atrasado,
            'favorito' => $this->favorito,
            'fija' => $this->fija,
            'batacazo' => $this->batacazo,
            'triplona' => $this->triplona,
            'cuatriplona' => $this->cuatriplona,
        ]);

        return $dataProvider;
    }
}
