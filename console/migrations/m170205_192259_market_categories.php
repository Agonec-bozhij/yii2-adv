<?php

use yii\db\Migration;
use yii\db\mysql\Schema;

class m170205_192259_market_categories extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        $this->createTable('market_categories', [
            'category_id' => Schema::TYPE_PK,
            'cat_pid' => Schema::TYPE_SMALLINT,
            'cat_url' => Schema::TYPE_SMALLINT,
            'cat_title' => Schema::TYPE_STRING
        ], $tableOptions);
    }

    public function down()
    {
        echo "m170205_192259_market_categories cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
