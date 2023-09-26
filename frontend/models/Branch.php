<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "branch".
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $address
 * @property int $status
 * @property string|null $note
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property Storey[] $storeys
 */
class Branch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'branch';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'code', 'name', 'address', 'status'], 'required'],
            [['id', 'status'], 'integer'],
            [['note'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['code', 'name', 'address'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
            'address' => 'Address',
            'status' => 'Status',
            'note' => 'Note',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Storeys]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStoreys()
    {
        return $this->hasMany(Storey::class, ['id_branch' => 'id']);
    }
}
