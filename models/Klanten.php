<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "klanten".
 *
 * @property int $id
 * @property string $naam
 * @property string $adres
 * @property string $typegebouw
 * @property int $grootte
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
            [['naam', 'adres', 'typegebouw', 'grootte'], 'required'],
            [['grootte'], 'integer'],
            [['naam', 'adres', 'typegebouw'], 'string', 'max' => 30],
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
            'adres' => 'Adres',
            'typegebouw' => 'typegebouw',
            'grootte' => 'Grootte',
        ];
    }
}
