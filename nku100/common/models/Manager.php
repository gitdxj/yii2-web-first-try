<?php
/**
 * Team: ShuJuKuXiaoZu
 * Coding by dongxiangjing 1610199, 20190725
 */
namespace common\models;

use Yii;

/**
 * This is the model class for table "manager".
 *
 * @property integer $managerId
 * @property string $managerName
 * @property string $managerGender
 * @property string $managerMail
 * @property integer $collegeId
 * @property string $managerHomework
 *
 * @property College $college
 * @property Reply[] $replies
 * @property Message[] $messages
 */
class Manager extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'manager';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['managerId', 'managerName', 'managerGender', 'managerMail', 'collegeId', 'managerHomework'], 'required'],
            [['managerId', 'collegeId'], 'integer'],
            [['managerName', 'managerGender', 'managerMail', 'managerHomework'], 'string', 'max' => 255],
            [['collegeId'], 'exist', 'skipOnError' => true, 'targetClass' => College::className(), 'targetAttribute' => ['collegeId' => 'collegeId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'managerId' => 'Manager ID',
            'managerName' => 'Manager Name',
            'managerGender' => 'Manager Gender',
            'managerMail' => 'Manager Mail',
            'collegeId' => 'College ID',
            'managerHomework' => 'Manager Homework',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollege()
    {
        return $this->hasOne(College::className(), ['collegeId' => 'collegeId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReplies()
    {
        return $this->hasMany(Reply::className(), ['managerId' => 'managerId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMessages()
    {
        return $this->hasMany(Message::className(), ['messageId' => 'messageId'])->viaTable('reply', ['managerId' => 'managerId']);
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
