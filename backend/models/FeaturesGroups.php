<?php

namespace backend\models;


use yii\db\ActiveRecord;

class FeaturesGroups extends ActiveRecord
{
    public static function tableName()
    {
        return 'market_features_groups';
    }

    public function rules()
    {
        return [
            [['group_id', 'group_sort'], 'integer'],
            ['group_name', 'string', 'max' => 255, 'message' => 'Поле не может содержать больше 255 символов.'],
            [['group_name', 'group_sort'], 'required', 'message' => 'Поле не может быть пустым.']
        ];
    }
}