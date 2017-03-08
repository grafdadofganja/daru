<?php

use yii\db\Migration;

/**
 * Handles the creation of table `fractions`.
 */
class m170307_163742_create_fractions_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('fractions', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'fullname' => $this->string(),
            'population' => $this->string(),
            'location' => $this->string(),
            'lang' => $this->string(),
            'birthday' => $this->string(),            
            'attitude' => $this->string(),
            'leader' => $this->string(),
            'status' => $this->string(),
            'img' => $this->string(),
            'tag' => $this->string(),
            'info' => $this->text(),
            'bio' => $this->text(),
            'history' => $this->text(),
            'geo' => $this->text(),
            'system' => $this->text(),
            'facts' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('fractions');
    }
}
