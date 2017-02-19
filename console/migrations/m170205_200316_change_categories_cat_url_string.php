<?php

use yii\db\Migration;

class m170205_200316_change_categories_cat_url_string extends Migration
{
    public function up()
    {
        $this->alterColumn('market_categories', 'cat_url', \yii\db\mysql\Schema::TYPE_STRING);
    }

    public function down()
    {
        echo "m170205_200316_change_categories_cat_url_string cannot be reverted.\n";

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
