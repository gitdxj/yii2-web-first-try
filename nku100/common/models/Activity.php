<?php
/**
 * Team: ShuJuKuXiaoZu
 * Coding by dongxiangjing 1610199, 20190725
 */
namespace common\models;

use Yii;

/**
 * This is the model class for table "activity".
 *
 * @property string $activityAddress
 * @property string $activityTime
 * @property string $activityContent
 * @property string $activityName
 * @property integer $activityId
 * @property integer $categoryId
 *
 * @property Category $category
 * @property Hold[] $holds
 * @property Host[] $hosts
 */
class Activity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'activity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['activityAddress', 'activityTime', 'activityContent', 'activityName', 'categoryId'], 'required'],
            [['activityTime'], 'safe'],
            [['activityContent'], 'string'],
            [['categoryId'], 'integer'],
            [['activityAddress', 'activityName'], 'string', 'max' => 255],
            [['categoryId'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['categoryId' => 'categoryId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'activityAddress' => 'Activity Address',
            'activityTime' => 'Activity Time',
            'activityContent' => 'Activity Content',
            'activityName' => 'Activity Name',
            'activityId' => 'Activity ID',
            'categoryId' => 'Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['categoryId' => 'categoryId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHolds()
    {
        return $this->hasMany(Hold::className(), ['activityId' => 'activityId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHosts()
    {
        return $this->hasMany(Host::className(), ['hostId' => 'hostId'])->viaTable('hold', ['activityId' => 'activityId']);
    }

    /**
     * @inheritdoc
     * @return ActivityQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ActivityQuery(get_called_class());
    }
}
