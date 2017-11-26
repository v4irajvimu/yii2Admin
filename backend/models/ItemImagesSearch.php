<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ItemImages;

/**
 * ItemImagesSearch represents the model behind the search form about `backend\models\ItemImages`.
 */
class ItemImagesSearch extends ItemImages
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'item_id'], 'integer'],
            [['image_name', 'uploaded_at', 'is_main'], 'safe'],
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
        $query = ItemImages::find();

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
            'uploaded_at' => $this->uploaded_at,
            'item_id' => $this->item_id,
        ]);

        $query->andFilterWhere(['like', 'image_name', $this->image_name])
            ->andFilterWhere(['like', 'is_main', $this->is_main]);

        return $dataProvider;
    }
}
