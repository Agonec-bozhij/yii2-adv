<?php

use yii\db\Migration;

class m170219_170309_update_goods_cid extends Migration
{
    public function up()
    {
        $this->renameColumn('market_goods', 'cat_id', 'good_cid');
    }

    public function down()
    {
        echo "m170219_170309_update_goods_cid cannot be reverted.\n";

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
