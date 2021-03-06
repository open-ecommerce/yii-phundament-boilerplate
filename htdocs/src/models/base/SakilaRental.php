<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "sakila_rental".
 *
 * @property integer $rental_id
 * @property string $rental_date
 * @property integer $inventory_id
 * @property integer $customer_id
 * @property string $return_date
 * @property integer $staff_id
 * @property string $last_update
 *
 * @property \app\models\SakilaPayment[] $sakilaPayments
 * @property \app\models\SakilaCustomer $customer
 * @property \app\models\SakilaInventory $inventory
 * @property \app\models\SakilaStaff $staff
 * @property string $aliasModel
 */
abstract class SakilaRental extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sakila_rental';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rental_date', 'inventory_id', 'customer_id', 'staff_id'], 'required'],
            [['rental_date', 'return_date', 'last_update'], 'safe'],
            [['inventory_id', 'customer_id', 'staff_id'], 'integer'],
            [['rental_date', 'inventory_id', 'customer_id'], 'unique', 'targetAttribute' => ['rental_date', 'inventory_id', 'customer_id'], 'message' => 'The combination of Rental Date, Inventory ID and Customer ID has already been taken.'],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => SakilaCustomer::className(), 'targetAttribute' => ['customer_id' => 'customer_id']],
            [['inventory_id'], 'exist', 'skipOnError' => true, 'targetClass' => SakilaInventory::className(), 'targetAttribute' => ['inventory_id' => 'inventory_id']],
            [['staff_id'], 'exist', 'skipOnError' => true, 'targetClass' => SakilaStaff::className(), 'targetAttribute' => ['staff_id' => 'staff_id']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rental_id' => Yii::t('app', 'Rental ID'),
            'rental_date' => Yii::t('app', 'Rental Date'),
            'inventory_id' => Yii::t('app', 'Inventory ID'),
            'customer_id' => Yii::t('app', 'Customer ID'),
            'return_date' => Yii::t('app', 'Return Date'),
            'staff_id' => Yii::t('app', 'Staff ID'),
            'last_update' => Yii::t('app', 'Last Update'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSakilaPayments()
    {
        return $this->hasMany(\app\models\SakilaPayment::className(), ['rental_id' => 'rental_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(\app\models\SakilaCustomer::className(), ['customer_id' => 'customer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInventory()
    {
        return $this->hasOne(\app\models\SakilaInventory::className(), ['inventory_id' => 'inventory_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasOne(\app\models\SakilaStaff::className(), ['staff_id' => 'staff_id']);
    }


    
    /**
     * @inheritdoc
     * @return SakilaRentalQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\SakilaRentalQuery(get_called_class());
    }


}
