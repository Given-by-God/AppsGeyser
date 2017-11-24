<?php

use yii\db\Migration;

/**
 * Handles the creation of table `admin`.
 */
class m171123_201742_create_admin_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('admin', [
            'id' => $this->primaryKey(),
            'firstName' => $this->text(),
            'lastName' => $this->text(),
            'username' =>$this->text(),
            'password' =>$this->text(),
            'authKey' =>$this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('admin');
    }
}
