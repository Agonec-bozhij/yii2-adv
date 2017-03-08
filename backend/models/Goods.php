<?php

namespace backend\models;


use yii\db\ActiveRecord;

class Goods extends ActiveRecord
{
    public $gallery;

    public static function tableName()
    {
        return 'market_goods';
    }

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public function uploadGallery() {

        if($this->validate()) {

            foreach($this->gallery as $file) {

                $path = 'upload/store/' . $file->baseName . '.' . $file->extension;
                $file->saveAs($path);
                $this->attachImage($path);
                unlink($path);
            }

            return true;
        } else {

            return false;
        }
    }

    public function rules()
    {
        return [
            [['good_id', 'good_cid', 'good_mid', 'good_series', 'good_action'], 'integer'],
            [['good_url', 'good_title', 'good_model', 'good_short_description', 'good_meta_description'], 'string', 'max' => 255],
            ['good_description', 'string'],
            [['gallery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 20]
        ];
    }

    public function attributeLabels()
    {
        return [
            'good_id' => 'ID',
            'good_cid' => 'Родительская категория',
            'good_mid' => 'Производитель',
            'good_series' => 'Серия',
            'good_action' => 'Акция',
            'good_url' => 'URL товара',
            'good_title' => 'Название товара',
            'good_model' => 'Модель',
            'good_short_description' => 'Краткое описание товара',
            'good_meta_description' => 'Мета-описание товара',
            'good_description' => 'Полное описание товара',
            'gallery' => 'Галерея'
        ];
    }
}