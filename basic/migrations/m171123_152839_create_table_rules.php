<?php

use yii\db\Migration;

/**
 * Class m171123_152839_create_table_rules
 */
class m171123_152839_create_table_rules extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable(
            'rules',
            [
                'id' => $this->primaryKey(),
                'country' => $this->text()->notNull(),
                'get' => $this->text()->notNull(),
                'id_banner' => $this->integer()->notNull(),
            ]
        );

        $this->createIndex(
            'idx-rules-id',
            'rules',
            'id_banner'
        );

        $this->addForeignKey(
            'fk-rules-id_banner',
            'rules',
            'id_banner',
            'bannerRules',
            'id',
            'CASCADE'
        );


    }


    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-rules-id_banner',
            'rules'
        );
        $this->dropIndex(
            'idx-rules-id',
            'rules'
        );


        $this->dropTable('rules');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171123_152839_create_table_rules cannot be reverted.\n";

        return false;
    }
    */
}
