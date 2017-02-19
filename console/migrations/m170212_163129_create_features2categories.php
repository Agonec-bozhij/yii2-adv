<?php

use yii\db\Migration;
use yii\db\mysql\Schema;

class m170212_163129_create_features2categories extends Migration
{
    public function up()
    {
        $this->createTable('market_features2categories', [
            'alias_fid' => Schema::TYPE_SMALLINT . ' UNSIGNED NOT NULL',
            'alias_cid' => Schema::TYPE_SMALLINT . ' UNSIGNED NOT NULL',
            'alias_search_type' => 'enum("select","checkbox","field","radio","range") NULL'
        ]);
    }

    public function down()
    {
        echo "m170212_163129_create_features2categories cannot be reverted.\n";

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
