<?php

use yii\db\Migration;

/**
 * Handles the creation of table `regions`.
 */
class m170309_133119_create_regions_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('regions', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'capital' => $this->string(),
            'district' => $this->string(),
            'amount' => $this->string(),
            'territory' => $this->string(),
            'lang' => $this->string(),
            'leader' => $this->string(),
            'religion' => $this->string(),
            'img' => $this->string(),
            'tag' => $this->string(),
            'info' => $this->text(),
            'geo' => $this->text(),
            'history' => $this->text(),
            'cities' => $this->text(),
            'capitalinfo' => $this->text(),
            'economic' => $this->text(),
            'transport' => $this->text(),
            'objects' => $this->text(),
            'populataion' => $this->text(),
            'importance' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('regions');
    }
}
