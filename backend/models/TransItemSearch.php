<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TransItem;

/**
 * TransItemSearch represents the model behind the search form about `backend\models\TransItem`.
 */
class TransItemSearch extends TransItem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'qty_in', 'qty_out', 'trans_type_id', 'item_id', 'branch_id'], 'integer'],
            [['created_at', 'updatetd_at'], 'safe'],
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
        $query = TransItem::find();

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
            'qty_in' => $this->qty_in,
            'qty_out' => $this->qty_out,
            'trans_type_id' => $this->trans_type_id,
            'item_id' => $this->item_id,
            'branch_id' => $this->branch_id,
            'created_at' => $this->created_at,
            'updatetd_at' => $this->updatetd_at,
        ]);

        return $dataProvider;
    }
}
