<?php

use yii\db\Migration;

class m170205_192334_market_goods_to_cat_fk extends Migration
{
    public function up()
    {
        $this->createIndex('FK_good_category', 'market_goods', 'cat_id');
    }

    public function down()
    {
        echo "m170205_192334_market_goods_to_cat_fk cannot be reverted.\n";

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
