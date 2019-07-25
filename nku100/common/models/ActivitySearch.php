<?php
/**
 * Team: ShuJuKuXiaoZu
 * Coding by dongxiangjing 1610199, 20190725
 */
namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Activity;

/**
 * ActivitySearch represents the model behind the search form about `app\models\Activity`.
 */
class ActivitySearch extends Activity
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['activityAddress', 'activityTime', 'activityContent', 'activityName'], 'safe'],
            [['activityId', 'categoryId'], 'integer'],
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
        $query = Activity::find();

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
            'activityTime' => $this->activityTime,
            'activityId' => $this->activityId,
            'categoryId' => $this->categoryId,
        ]);

        $query->andFilterWhere(['like', 'activityAddress', $this->activityAddress])
            ->andFilterWhere(['like', 'activityContent', $this->activityContent])
            ->andFilterWhere(['like', 'activityName', $this->activityName]);

        return $dataProvider;
    }
}
