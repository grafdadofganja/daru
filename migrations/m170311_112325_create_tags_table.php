<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tags`.
 */
class m170311_112325_create_tags_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tags', [
            'id' => $this->primaryKey(),
            'tag' => $this->string()->notNull()->unique(),
            'category' => $this->string(),
            'ownid' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tags');
    }
}
