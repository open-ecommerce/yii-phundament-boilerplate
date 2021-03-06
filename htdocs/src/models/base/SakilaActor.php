<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "sakila_actor".
 *
 * @property integer $actor_id
 * @property string $first_name
 * @property string $last_name
 * @property string $last_update
 *
 * @property \app\models\SakilaFilmActor[] $sakilaFilmActors
 * @property \app\models\SakilaFilm[] $films
 * @property string $aliasModel
 */
abstract class SakilaActor extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sakila_actor';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name'], 'required'],
            [['last_update'], 'safe'],
            [['first_name', 'last_name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'actor_id' => Yii::t('app', 'Actor ID'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'last_update' => Yii::t('app', 'Last Update'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSakilaFilmActors()
    {
        return $this->hasMany(\app\models\SakilaFilmActor::className(), ['actor_id' => 'actor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilms()
    {
        return $this->hasMany(\app\models\SakilaFilm::className(), ['film_id' => 'film_id'])->viaTable('sakila_film_actor', ['actor_id' => 'actor_id']);
    }


    
    /**
     * @inheritdoc
     * @return SakilaActorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\SakilaActorQuery(get_called_class());
    }


}
