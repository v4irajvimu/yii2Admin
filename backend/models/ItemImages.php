<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "item_images".
 *
 * @property integer $id
 * @property string $image_name
 * @property string $uploaded_at
 * @property string $is_main
 * @property integer $item_id
 *
 * @property Item $item
 */
class ItemImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uploaded_at'], 'safe'],
            [['is_main'], 'string'],
            [['item_id'], 'required'],
            [['item_id'], 'integer'],
            [['image_name'], 'string', 'max' => 50],
            [['image_name'], 'unique'],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image_name' => 'Image Name',
            'uploaded_at' => 'Uploaded At',
            'is_main' => 'Is Main',
            'item_id' => 'Item ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['id' => 'item_id']);
    }
}
