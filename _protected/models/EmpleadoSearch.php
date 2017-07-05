<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Empleado;

/**
 * app\models\EmpleadoSearch represents the model behind the search form about `app\models\Empleado`.
 */
 class EmpleadoSearch extends Empleado
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'id_persona', 'created_by', 'updated_by'], 'integer'],
            [['id','cargo', 'fecha_ingreso', 'created_at', 'updated_at'], 'safe'],
            [['sueldo'], 'number'],
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
        $query = Empleado::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('persona');

        $query->andFilterWhere([
            'id' => $this->id,
            'id_persona' => $this->id_persona,
            'fecha_ingreso' => $this->fecha_ingreso,
            'sueldo' => $this->sueldo,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);
        $query->andFilterWhere(['like', 'cargo', $this->cargo]);
           // ->andFilterWhere(['like', 'apellido', $this->id_persona]);

        return $dataProvider;
    }
}
