<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "trans_item".
 *
 * @property integer $id
 * @property integer $qty_in
 * @property integer $qty_out
 * @property integer $trans_type_id
 * @property integer $item_id
 * @property integer $branch_id
 * @property string $created_at
 * @property string $updatetd_at
 *
 * @property Branch $branch
 * @property Item $item
 * @property TransType $transType
 */
class TransItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['qty_in', 'qty_out', 'trans_type_id', 'item_id', 'branch_id'], 'integer'],
            [['trans_type_id', 'item_id', 'branch_id'], 'required'],
            [['created_at', 'updatetd_at'], 'safe'],
            [['branch_id'], 'exist', 'skipOnError' => true, 'targetClass' => Branch::className(), 'targetAttribute' => ['branch_id' => 'id']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'id']],
            [['trans_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => TransType::className(), 'targetAttribute' => ['trans_type_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'qty_in' => 'Qty In',
            'qty_out' => 'Qty Out',
            'trans_type_id' => 'Trans Type ID',
            'item_id' => 'Item ID',
            'branch_id' => 'Branch ID',
            'created_at' => 'Created At',
            'updatetd_at' => 'Updatetd At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBranch()
    {
        return $this->hasOne(Branch::className(), ['id' => 'branch_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['id' => 'item_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransType()
    {
        return $this->hasOne(TransType::className(), ['id' => 'trans_type_id']);
    }
}
