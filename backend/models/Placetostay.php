<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "placetostay".
 *
 * @property int $id
 * @property string $placetostay
 */
class Placetostay extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'placetostay';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['placetostay'], 'required'],
            [['placetostay'], 'string', 'max' => 3000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'placetostay' => 'Placetostay',
        ];
    }
}
