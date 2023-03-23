<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gebreken".
 *
 * @property int $id
 * @property int $projecten_id
 * @property string $gebreek_info
 * @property resource $gebreek_foto
 * @property int $gebreek_kosten
 */
class Gebreken extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gebreken';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['projecten_id', 'gebreek_info', 'gebreek_foto', 'gebreek_kosten'], 'required'],
            [['projecten_id', 'gebreek_kosten'], 'integer'],
            [['gebreek_foto'], 'file', 'skipOnEmpty' => true, 'extensions' => 'pdf'],

            [['gebreek_info'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'projecten_id' => 'Projecten ID',
            'gebreek_info' => 'Gebreek Info',
            'gebreek_foto' => 'Gebreek Foto',
            'gebreek_kosten' => 'Gebreek Kosten',
        ];
    }
}
