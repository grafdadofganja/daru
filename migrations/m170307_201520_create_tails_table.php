<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tails`.
 */
class m170307_201520_create_tails_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tales', [
            'id' => $this->primaryKey(),
            'chapter' => $this->string(),
            'name' => $this->string(),
            'text' => $this->text(),
            'description' => $this->text(),
            'position' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tales');
    }
}
