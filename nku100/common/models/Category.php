<?php
/**
 * Team: ShuJuKuXiaoZu
 * Coding by dongxiangjing 1610199, 20190725
 */
namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property string $categoryName
 * @property integer $categoryId
 *
 * @property Activity[] $activities
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categoryName'], 'required'],
            [['categoryName'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'categoryName' => 'Category Name',
            'categoryId' => 'Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivities()
    {
        return $this->hasMany(Activity::className(), ['categoryId' => 'categoryId']);
    }

    /**
     * @inheritdoc
     * @return CategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CategoryQuery(get_called_class());
    }
}
