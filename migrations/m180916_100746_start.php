<?php
use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m180916_100746_start
 */
class m180916_100746_start extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('start', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
        ]);
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180916_100746_start cannot be reverted.\n";
        return false;
    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
    }
    public function down()
    {
        echo "m180916_100746_start cannot be reverted.\n";
        return false;
    }
    */
}