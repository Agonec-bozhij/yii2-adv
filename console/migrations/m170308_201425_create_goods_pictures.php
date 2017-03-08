<?php

use yii\db\Migration;

class m170308_201425_create_goods_pictures extends Migration
{
    public function up()
    {
        $this->createTable('market_goods_pictures', [
            'pic_name' => $this->string(32)->notNull(),
            'pic_gid' => $this->integer()->unsigned()->notNull(),
            'pic_default' => $this->smallInteger()->unsigned()->notNull(),
            'pic_ext' => "enum('jpeg', 'jpg', 'png', 'gif', 'bmp')"
        ]);
    }

    public function down()
    {
        echo "m170308_201425_create_goods_pictures cannot be reverted.\n";

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
