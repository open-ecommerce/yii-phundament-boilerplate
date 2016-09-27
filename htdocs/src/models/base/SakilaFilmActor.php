<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "sakila_film_actor".
 *
 * @property integer $actor_id
 * @property integer $film_id
 * @property string $last_update
 *
 * @property \app\models\SakilaActor $actor
 * @property \app\models\SakilaFilm $film
 * @property string $aliasModel
 */
abstract class SakilaFilmActor extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sakila_film_actor';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['actor_id', 'film_id'], 'required'],
            [['actor_id', 'film_id'], 'integer'],
            [['last_update'], 'safe'],
            [['actor_id'], 'exist', 'skipOnError' => true, 'targetClass' => SakilaActor::className(), 'targetAttribute' => ['actor_id' => 'actor_id']],
            [['film_id'], 'exist', 'skipOnError' => true, 'targetClass' => SakilaFilm::className(), 'targetAttribute' => ['film_id' => 'film_id']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'actor_id' => Yii::t('app', 'Actor ID'),
            'film_id' => Yii::t('app', 'Film ID'),
            'last_update' => Yii::t('app', 'Last Update'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActor()
    {
        return $this->hasOne(\app\models\SakilaActor::className(), ['actor_id' => 'actor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilm()
    {
        return $this->hasOne(\app\models\SakilaFilm::className(), ['film_id' => 'film_id']);
    }


    
    /**
     * @inheritdoc
     * @return SakilaFilmActorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\SakilaFilmActorQuery(get_called_class());
    }


}