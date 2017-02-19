<?php

use yii\db\Migration;

class m170212_173823_create_features_values extends Migration
{
    public function up()
    {
        $this->createTable('market_features_values', [
            'id' => $this->primaryKey(5)->unsigned()->notNull(),
            'value' => $this->string(255)->null(),
            'fid' => $this->integer(5)->unsigned()->notNull(),
            'sort' => $this->integer(1)->unsigned()->notNull()
        ]);
    }

    public function down()
    {
        echo "m170212_173823_create_features_values cannot be reverted.\n";

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
