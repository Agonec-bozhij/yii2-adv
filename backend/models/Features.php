<?php

namespace backend\models;


use yii\db\ActiveRecord;

class Features extends ActiveRecord
{
    public $feature_types = [
        'enum' => 'Одиночный выбор',
        'enum_picture' => 'Одиночный выбор (Изображение)',
        'float' => 'Число с плавающей точкой',
        'int' => 'Целое число',
        'mediumtext' => 'Текст',
        'text' => 'Длинный текст',
        'set' => 'Множественный выбор',
        'set_picture' => 'Множественный выбор (Изображение)'
    ];

    public static function tableName()
    {
        return 'market_features';
    }

    public function rules()
    {
        return [
            [['feature_name', 'feature_type'], 'required', 'message' => 'Поле не может быть пустым.'],
            [['feature_name', 'feature_type', 'feature_measure'], 'string'],
            [['feature_min', 'feature_max', 'feature_gid'], 'integer', 'message' => 'Значение в поле должно быть целым числом']
        ];
    }

    public function getValues()
    {
        return $this->hasMany(FeaturesValues::className(), ['fid' => 'feature_id']);
    }
}