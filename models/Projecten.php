<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projecten".
 *
 * @property int $id
 * @property int $klanten_id
 * @property string $klanten_naam
 * @property string $adres
 * @property string $nummer
 * @property string $woonplaats
 * @property string $status
 */
class Projecten extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projecten';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['klanten_id', 'klanten_naam', 'adres', 'nummer', 'woonplaats', 'status'], 'required'],
            [['klanten_id'], 'integer'],
            [['status'], 'string'],
            [['klanten_naam', 'adres', 'woonplaats'], 'string', 'max' => 200],
            [['nummer'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'klanten_id' => 'Klanten ID',
            'klanten_naam' => 'Klanten Naam',
            'adres' => 'Adres',
            'nummer' => 'Nummer',
            'woonplaats' => 'Woonplaats',
            'status' => 'Status',
        ];
    }
}
