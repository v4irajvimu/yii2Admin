<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property integer $id
 * @property string $item_code
 * @property string $item_name
 * @property string $desc
 * @property string $cost
 * @property string $selling
 * @property string $is_active
 * @property string $created_at
 *
 * @property ItemImages[] $itemImages
 * @property TransItem[] $transItems
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cost', 'selling'], 'number'],
            [['is_active'], 'string'],
            [['created_at'], 'safe'],
            [['item_code'], 'string', 'max' => 20],
            [['item_name', 'desc'], 'string', 'max' => 45],
            [['item_code'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item_code' => 'Item Code',
            'item_name' => 'Item Name',
            'desc' => 'Desc',
            'cost' => 'Cost',
            'selling' => 'Selling',
            'is_active' => 'Is Active',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItemImages()
    {
        return $this->hasMany(ItemImages::className(), ['item_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransItems()
    {
        return $this->hasMany(TransItem::className(), ['item_id' => 'id']);
    }
}
