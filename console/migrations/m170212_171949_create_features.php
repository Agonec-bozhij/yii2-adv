<?php

use yii\db\Migration;

class m170212_171949_create_features extends Migration
{
    public function up()
    {
        $this->createTable('market_features', [
            'feature_id' => $this->primaryKey(5)->unsigned()->notNull(),
            'feature_gid' => $this->integer(5)->unsigned()->notNull(),
            'feature_name' => $this->string(255)->notNull(),
            'feature_type' => "enum('int','float','text','mediumtext','enum','set','enum_picture','set_picture') NOT NULL",
            'feature_required' => $this->integer(1)->unsigned()->notNull(),
            'feature_min' => $this->integer(10)->notNull(),
            'feature_max' => $this->integer(10)->notNull(),
            'feature_precision' => $this->integer(1)->unsigned()->notNull(),
            'feature_sort' => $this->integer(1)->unsigned()->notNull(),
            'feature_show_on_list' => $this->integer(1)->unsigned()->notNull(),
            'feature_measure' => $this->string(255)->notNull(),
            'feature_show_on_good' => $this->integer(1)->unsigned()->notNull()
        ]);
    }

    public function down()
    {
        echo "m170212_171949_create_features cannot be reverted.\n";

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
