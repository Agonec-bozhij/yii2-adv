<?php

use yii\db\Migration;
use yii\db\mysql\Schema;

class m170219_170744_update_goods_add_columns extends Migration
{
    public function up()
    {
        $this->addColumn('market_goods', 'good_mid', Schema::TYPE_SMALLINT);
        $this->addColumn('market_goods', 'good_series', Schema::TYPE_SMALLINT);
        $this->addColumn('market_goods', 'good_model', Schema::TYPE_STRING);
        $this->addColumn('market_goods', 'good_description', Schema::TYPE_TEXT);
        $this->addColumn('market_goods', 'good_short_description', Schema::TYPE_STRING);
        $this->addColumn('market_goods', 'good_create_time', Schema::TYPE_DATETIME);
        $this->addColumn('market_goods', 'good_meta_description', Schema::TYPE_STRING);
        $this->addColumn('market_goods', 'good_action', Schema::TYPE_SMALLINT);
        $this->addColumn('market_goods', 'good_bought', Schema::TYPE_SMALLINT);
        $this->addColumn('market_goods', 'good_published', Schema::TYPE_SMALLINT);
        $this->addColumn('market_goods', 'good_residue', Schema::TYPE_INTEGER);
        $this->addColumn('market_goods', 'good_views', Schema::TYPE_INTEGER);
        $this->addColumn('market_goods', 'good_country', Schema::TYPE_STRING);
    }

    public function down()
    {
        echo "m170219_170744_update_goods_add_columns cannot be reverted.\n";

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
