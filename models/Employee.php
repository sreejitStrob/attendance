<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $employee_id
 * @property string $first_name
 * @property string|null $last_name
 * @property int $phone_number
 * @property string|null $email_id
 * @property string|null $date_of_birth
 * @property int|null $secondary_contact
 * @property int|null $is_active
 * @property int|null $is_deleted
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'phone_number'], 'required'],
            [['phone_number', 'secondary_contact', 'is_active', 'is_deleted'], 'integer'],
            [['date_of_birth', 'created_at', 'updated_at'], 'safe'],
            [['first_name', 'last_name'], 'string', 'max' => 200],
            [['email_id'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'employee_id' => 'Employee ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'phone_number' => 'Phone Number',
            'email_id' => 'Email ID',
            'date_of_birth' => 'Date Of Birth',
            'secondary_contact' => 'Secondary Contact',
            'is_active' => 'Is Active',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * {@inheritdoc}
     * @return EmployeeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EmployeeQuery(get_called_class());
    }
}
