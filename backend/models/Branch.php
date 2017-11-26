<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "branch".
 *
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $address
 * @property string $email
 * @property string $tp_home
 * @property string $tp_mobile
 * @property string $fax
 * @property string $is_active
 * @property string $created
 * @property integer $company_id
 *
 * @property AuthRoleHasBranch[] $authRoleHasBranches
 * @property AuthRole[] $authRoles
 * @property Company $company
 * @property TransItem[] $transItems
 */
class Branch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'branch';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_active'], 'string'],
            [['created'], 'safe'],
            [['company_id'], 'required'],
            [['company_id'], 'integer'],
            [['code', 'name', 'address', 'email', 'tp_home', 'tp_mobile', 'fax'], 'string', 'max' => 45],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
            'address' => 'Address',
            'email' => 'Email',
            'tp_home' => 'Tp Home',
            'tp_mobile' => 'Tp Mobile',
            'fax' => 'Fax',
            'is_active' => 'Is Active',
            'created' => 'Created',
            'company_id' => 'Company ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthRoleHasBranches()
    {
        return $this->hasMany(AuthRoleHasBranch::className(), ['branch_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthRoles()
    {
        return $this->hasMany(AuthRole::className(), ['id' => 'auth_role_id'])->viaTable('auth_role_has_branch', ['branch_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransItems()
    {
        return $this->hasMany(TransItem::className(), ['branch_id' => 'id']);
    }
}
