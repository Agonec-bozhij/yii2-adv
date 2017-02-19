<?php

use yii\db\Migration;

class m170212_175429_create_goods_features extends Migration
{
    public function up()
    {
        $this->createTable('market_goods_features', [
            'value_gid' => $this->integer(10)->unsigned()->notNull(),
            'value_fid' => $this->integer(5)->unsigned()->notNull(),
            'value' => $this->text()->notNull(),
            'value_id' => $this->integer(10)->unsigned()->notNull(),
            'value_cid' => $this->integer(5)->unsigned()->notNull()
        ]);
    }

    public function down()
    {
        echo "m170212_175429_create_goods_features cannot be reverted.\n";

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
