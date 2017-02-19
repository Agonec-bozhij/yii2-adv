<?php

use yii\db\Migration;
use yii\db\mysql\Schema;

class m170212_165346_create_features_groups extends Migration
{
    public function up()
    {
        $this->createTable('market_features_groups', [
            'group_id' => $this->primaryKey()->unsigned()->notNull(),
            'group_name' => $this->string(255)->notNull(),
            'group_sort' => Schema::TYPE_SMALLINT . ' UNSIGNED NOT NULL'
        ]);
    }

    public function down()
    {
        echo "m170212_165346_create_features_groups cannot be reverted.\n";

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
