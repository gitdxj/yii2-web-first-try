<?php
/**
 * Team: ShuJuKuXiaoZu
 * Coding by dongxiangjing 1610199, 20190725
 */
namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use acommonpp\models\manager;

/**
 * ManagerSearch represents the model behind the search form about `app\models\manager`.
 */
class ManagerSearch extends manager
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['managerId', 'collegeId'], 'integer'],
            [['managerName', 'managerGender', 'managerMail', 'managerHomework'], 'safe'],
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
        $query = manager::find();

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
            'managerId' => $this->managerId,
            'collegeId' => $this->collegeId,
        ]);

        $query->andFilterWhere(['like', 'managerName', $this->managerName])
            ->andFilterWhere(['like', 'managerGender', $this->managerGender])
            ->andFilterWhere(['like', 'managerMail', $this->managerMail])
            ->andFilterWhere(['like', 'managerHomework', $this->managerHomework]);

        return $dataProvider;
    }
}
