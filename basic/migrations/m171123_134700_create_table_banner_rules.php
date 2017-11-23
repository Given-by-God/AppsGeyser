<?php

use yii\db\Migration;

/**
 * Class m171123_134700_create_table_banner_rules
 */
class m171123_134700_create_table_banner_rules extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable(
            'bannerRules',
            [
                'id' => $this->primaryKey(),
                'match' => $this->text()->notNull(),
                'noMatch' => $this->text()->notNull(),
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('bannerRules');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171123_164700_create_table_banner_rules cannot be reverted.\n";

        return false;
    }
    */
}
