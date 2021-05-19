<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%task}}`.
 */
class m210519_111947_create_task_table extends Migration
{
    public $tableName = '{{%task}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'topic' => $this->string(),
            'answer' => $this->string(),
            'created_at' => $this->dateTime()
        ]);

        $this->addForeignKey('fk-task-user_id-user-id', $this->tableName, 'user_id', 'user', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
