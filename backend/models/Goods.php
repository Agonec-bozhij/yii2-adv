<?php

namespace backend\models;


use yii\db\ActiveRecord;

class Goods extends ActiveRecord
{
    public static function tableName()
    {
        return 'market_goods';
    }

    public function rules()
    {
        return [
            [['good_id', '']]
        ];
    }
}