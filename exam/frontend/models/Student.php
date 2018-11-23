<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $s_id id主键
 * @property string $s_num 学号
 * @property string $s_name 学生姓名
 * @property string $sex 性别
 * @property string $s_card 身份证
 * @property int $c_id 所属班级号
 * @property int $status 0在校1毕业2休学3退学
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_id'], 'integer'],
            [['s_num', 's_name'], 'string', 'max' => 255],
            [['sex'], 'string', 'max' => 6],
            [['s_card'], 'string', 'max' => 20],
            [['status'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            's_id' => 'S ID',
            's_num' => 'S Num',
            's_name' => 'S Name',
            'sex' => 'Sex',
            's_card' => 'S Card',
            'c_id' => 'C ID',
            'status' => 'Status',
        ];
    }
}
