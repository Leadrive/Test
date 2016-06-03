<?php namespace Leadrive\Test\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLeadriveTestList extends Migration
{
    public function up()
    {
        Schema::create('leadrive_test_demo', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->integer('type_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('leadrive_test_demo');
    }
}
