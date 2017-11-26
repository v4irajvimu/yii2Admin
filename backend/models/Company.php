<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property integer $id
 * @property string $name
 * @property string $slogan
 * @property string $thumb
 * @property string $address
 * @property string $tp_home
 * @property string $tp_mobile
 * @property string $email
 * @property string $fax
 * @property string $is_active
 * @property string $created
 *
 * @property Branch[] $branches
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_active'], 'string'],
            [['created'], 'safe'],
            [['name', 'slogan'], 'string', 'max' => 150],
            [['thumb'], 'string', 'max' => 80],
            [['address'], 'string', 'max' => 255],
            [['tp_home', 'tp_mobile', 'email', 'fax'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'slogan' => 'Slogan',
            'thumb' => 'Thumb',
            'address' => 'Address',
            'tp_home' => 'Tp Home',
            'tp_mobile' => 'Tp Mobile',
            'email' => 'Email',
            'fax' => 'Fax',
            'is_active' => 'Is Active',
            'created' => 'Created',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBranches()
    {
        return $this->hasMany(Branch::className(), ['company_id' => 'id']);
    }
}
