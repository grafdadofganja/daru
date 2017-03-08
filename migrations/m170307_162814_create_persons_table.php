<?php

use yii\db\Migration;

/**
 * Handles the creation of table `persons`.
 */
class m170307_162814_create_persons_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('persons', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'fullname' => $this->string(),
            'nicks' => $this->string(),
            'location' => $this->string(),
            'gender' => $this->string(),
            'birthday' => $this->string(),
            'religion' => $this->string(),
            'attitude' => $this->string(),
            'status' => $this->string(),
            'img' => $this->string(),
            'tag' => $this->string(),
            'info' => $this->text(),
            'bio' => $this->text(),
            'relation' => $this->text(),
            'life' => $this->text(),
            'facts' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('persons');
    }
}
