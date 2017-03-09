<?php

use yii\db\Migration;

/**
 * Handles the creation of table `nations`.
 */
class m170309_122957_create_nations_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('nations', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),            
            'population' => $this->string(),
            'place' => $this->string(),
            'lang' => $this->string(),
            'religion' => $this->string(),
            'country' => $this->string(),
            'relation' => $this->string(),
            'img' => $this->string(),
            'tag' => $this->string(),
            'origin' => $this->string(),
            'info' => $this->text(),
            'history' => $this->text(),
            'location' => $this->text(),
            'life' => $this->text(),
            'tradition' => $this->text(),
            'facts' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('nations');
    }
}
