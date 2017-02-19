<?php

namespace backend\models;

use yii\db\ActiveRecord;

class Categories extends ActiveRecord
{
    public static function tableName()
    {
        return 'market_categories';
    }

    public function rules()
    {
        return [
            [['cat_pid', 'cat_url', 'cat_title'], 'required', 'message' => 'Поле не может быть пустым.'],
            [['category_id', 'cat_pid'], 'integer'],
            [['cat_url', 'cat_title'], 'string', 'max' => 255]
        ];
    }
}