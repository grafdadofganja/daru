<?php

use yii\db\Migration;

/**
 * Handles the creation of table `religions`.
 */
class m170307_165127_create_religions_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('religions', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'fullname' => $this->string(),
            'popamount' => $this->string(),
            'holyplace' => $this->string(),
            'lang' => $this->string(),
            'birthday' => $this->string(),
            'aim' => $this->string(),
            'god' => $this->string(),
            'book' => $this->string(),
            'img' => $this->string(),
            'tag' => $this->string(),
            'info' => $this->text(),
            'history' => $this->text(),
            'science' => $this->text(),
            'population' => $this->text(),
            'persons' => $this->text(),
            'defect' => $this->text(),
            'facts' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('religions');
    }
}
