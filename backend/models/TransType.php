<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "trans_type".
 *
 * @property integer $id
 * @property string $trans_name
 * @property string $is_active
 *
 * @property TransItem[] $transItems
 */
class TransType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_active'], 'string'],
            [['trans_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'trans_name' => 'Trans Name',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransItems()
    {
        return $this->hasMany(TransItem::className(), ['trans_type_id' => 'id']);
    }
}
