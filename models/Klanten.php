<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "klanten".
 *
 * @property int $id
 * @property string $naam
 * @property string $telefoon
 */
class Klanten extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'klanten';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['naam', 'telefoon'], 'required'],
            [['naam'], 'string', 'max' => 30],
            [['telefoon'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'naam' => 'Naam',
            'telefoon' => 'Telefoon',
        ];
    }
}
