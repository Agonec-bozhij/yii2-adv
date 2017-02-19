<?php

use yii\db\Migration;
use yii\db\mysql\Schema;

class m170205_190747_market_goods extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        $this->createTable('market_goods', [
            'good_id' => Schema::TYPE_PK,
            'cat_id' => Schema::TYPE_SMALLINT,
            'good_url' => Schema::TYPE_STRING,
            'good_title' => Schema::TYPE_STRING
        ], $tableOptions);
    }

    public function down()
    {
        echo "m170205_190747_market_goods cannot be reverted.\n";

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
