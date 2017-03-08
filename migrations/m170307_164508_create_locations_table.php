<?php

use yii\db\Migration;

/**
 * Handles the creation of table `locations`.
 */
class m170307_164508_create_locations_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('locations', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'location' => $this->string(),
            'leader' => $this->string(),
            'popdivision' => $this->string(),
            'type' => $this->string(),
            'popamount' => $this->string(),
            'primaryobj' => $this->string(),
            'aim' => $this->string(),
            'status' => $this->string(),
            'img' => $this->string(),
            'tag' => $this->string(),
            'info' => $this->text(),
            'geo' => $this->text(),
            'chrono' => $this->text(),
            'leadership' => $this->text(),
            'population' => $this->text(),
            'transport' => $this->text(),
            'life' => $this->text(),
            'arch' => $this->text(),
            'facts' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('locations');
    }
}
