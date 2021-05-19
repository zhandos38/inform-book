<?php

use yii\db\Migration;

/**
 * Class m210519_140639_rename_file_column_in_tast_table
 */
class m210519_140639_rename_file_column_in_tast_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('task',  'file', 'answer');
        $this->alterColumn('task', 'answer', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210519_140639_rename_file_column_in_tast_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210519_140639_rename_file_column_in_tast_table cannot be reverted.\n";

        return false;
    }
    */
}
