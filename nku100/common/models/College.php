<?php
/**
 * Team: ShuJuKuXiaoZu
 * Coding by dongxiangjing 1610199, 20190725
 */
namespace common\models;

use Yii;

/**
 * This is the model class for table "college".
 *
 * @property integer $collegeId
 * @property string $collegeName
 * @property string $collegeCampus
 *
 * @property Manager[] $managers
 */
class College extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'college';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['collegeName', 'collegeCampus'], 'required'],
            [['collegeName', 'collegeCampus'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'collegeId' => 'College ID',
            'collegeName' => 'College Name',
            'collegeCampus' => 'College Campus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManagers()
    {
        return $this->hasMany(Manager::className(), ['collegeId' => 'collegeId']);
    }

    /**
     * @inheritdoc
     * @return CollegeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CollegeQuery(get_called_class());
    }
}
