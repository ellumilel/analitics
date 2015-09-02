<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * PodruzkaProductSearch represents the model behind the search form about `app\models\PodruzkaProduct`.
 */
class PodruzkaProductSearch extends PodruzkaProduct
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'i_id', 'r_id', 'l_id'], 'integer'],
            [['article', 'title', 'group', 'category', 'sub_category', 'detail', 'brand', 'sub_brand',
                'line', 'arrival', 'ile_id', 'rive_id', 'letu_id', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['price', 'ma_price'], 'number'],
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
        $query = PodruzkaProduct::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => 50]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'article', $this->article])
            ->andFilterWhere(['like', 'group', $this->group])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'sub_category', $this->sub_category])
            ->andFilterWhere(['like', 'detail', $this->detail])
            ->andFilterWhere(['like', 'brand', $this->brand])
            ->andFilterWhere(['like', 'sub_brand', $this->sub_brand])
            ->andFilterWhere(['like', 'line', $this->line])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'ma_price', $this->ma_price]);

        return $dataProvider;
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function searchMatching($params)
    {
        $query = PodruzkaProduct::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => 50]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'article', $this->article])
            ->andFilterWhere(['like', 'group', $this->group])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'sub_category', $this->sub_category])
            ->andFilterWhere(['like', 'detail', $this->detail])
            ->andFilterWhere(['like', 'brand', $this->brand])
            ->andFilterWhere(['like', 'sub_brand', $this->sub_brand])
            ->andFilterWhere(['like', 'line', $this->line])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'ma_price', $this->ma_price])
            ->andWhere('l_id is not null');

        return $dataProvider;
    }
}
