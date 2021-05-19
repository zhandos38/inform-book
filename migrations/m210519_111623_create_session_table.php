<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%session}}`.
 */
class m210519_111623_create_session_table extends Migration
{
    public $tableName = '{{%session}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'enter_time' => $this->dateTime()
        ]);

        $this->addForeignKey('fk-session-user_id-user-id', $this->tableName, 'user_id', 'user', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
