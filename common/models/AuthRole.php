<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "auth_role".
 *
 * @property integer $id
 * @property string $name
 * @property string $is_active
 *
 * @property AuthItem[] $authItems
 * @property AuthRoleHasBranch[] $authRoleHasBranches
 * @property Branch[] $branches
 * @property User[] $users
 */
class AuthRole extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'auth_role';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_active'], 'string'],
            [['name'], 'string', 'max' => 45],
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
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthItems()
    {
        return $this->hasMany(AuthItem::className(), ['auth_role_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthRoleHasBranches()
    {
        return $this->hasMany(AuthRoleHasBranch::className(), ['auth_role_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBranches()
    {
        return $this->hasMany(Branch::className(), ['id' => 'branch_id'])->viaTable('auth_role_has_branch', ['auth_role_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['auth_role_id' => 'id']);
    }
}
