<?php

namespace backend\models;
use common\models\AuthRole;
use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $profile_img
 * @property string $tp_mobile
 * @property string $tp_fixed
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $last_loged_at
 * @property integer $auth_role_id
 *
 * @property AuthRole $authRole
 */

/*class User extends \yii\db\ActiveRecord*/
class User extends \common\models\User
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at', 'auth_role_id'], 'required'],
            [['status', 'created_at', 'updated_at', 'auth_role_id'], 'integer'],
            [['last_loged_at'], 'safe'],
            [['first_name', 'last_name'], 'string', 'max' => 80],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['profile_img'], 'string', 'max' => 100],
            [['tp_mobile', 'tp_fixed'], 'string', 'max' => 45],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
            [['auth_role_id'], 'exist', 'skipOnError' => true, 'targetClass' => AuthRole::className(), 'targetAttribute' => ['auth_role_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'profile_img' => 'Profile Img',
            'tp_mobile' => 'Tp Mobile',
            'tp_fixed' => 'Tp Fixed',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'last_loged_at' => 'Last Loged At',
            'auth_role_id' => 'Auth Role ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthRole()
    {
        return $this->hasOne(AuthRole::className(), ['id' => 'auth_role_id']);
    }
}
