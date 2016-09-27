<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "sakila_country".
 *
 * @property integer $country_id
 * @property string $country
 * @property string $last_update
 * @property string $aliasModel
 */
abstract class SakilaCountry extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sakila_country';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country'], 'required'],
            [['last_update'], 'safe'],
            [['country'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'country_id' => Yii::t('app', 'Country ID'),
            'country' => Yii::t('app', 'Country'),
            'last_update' => Yii::t('app', 'Last Update'),
        ];
    }


    
    /**
     * @inheritdoc
     * @return SakilaCountryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\SakilaCountryQuery(get_called_class());
    }


}