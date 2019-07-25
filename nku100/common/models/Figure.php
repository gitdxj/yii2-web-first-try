<?php
/**
 * Team: ShuJuKuXiaoZu
 * Coding by dongxiangjing 1610199, 20190725
 */
namespace common\models;

use Yii;

/**
 * This is the model class for table "figure".
 *
 * @property string $figureName
 * @property string $figureDescription
 */
class Figure extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'figure';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['figureName', 'figureDescription'], 'required'],
            [['figureDescription'], 'string'],
            [['figureName'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'figureName' => 'Figure Name',
            'figureDescription' => 'Figure Description',
        ];
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
