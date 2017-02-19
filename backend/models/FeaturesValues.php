<?php

namespace backend\models;


use yii\db\ActiveRecord;

class FeaturesValues extends ActiveRecord
{
    public static function tableName()
    {
        return 'market_features_values';
    }

    public function rules()
    {
        return [
            ['value', 'string'],
            ['fid', 'integer']
        ];
    }
}