<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace dmstr\modules\prototype\models\base;

use Yii;

/**
 * This is the base-model class for table "app_less".
 *
 * @property integer $id
 * @property string $key
 * @property string $value
 */
abstract class Less extends \yii\db\ActiveRecord
{


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%less}}';
    }

    /**
     * @inheritdoc
     * @return \dmstr\modules\prototype\models\query\LessQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \dmstr\modules\prototype\models\query\LessQuery(get_called_class());
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['key'], 'required'],
            [['value'], 'string'],
            [['key'], 'string', 'max' => 255],
            [['key'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'key' => Yii::t('app', 'Key'),
            'value' => Yii::t('app', 'Value'),
        ];
    }


}
