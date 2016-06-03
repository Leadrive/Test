<?php namespace Leadrive\Test\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLeadriveTestConfig extends Migration
{
    public function up()
    {
        Schema::create('leadrive_test_config', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->string('field_name', 64);
            $table->primary(['id','field_name']);
            $table->string('name', 64);
            $table->timestamps(); 
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('leadrive_test_config');
    }
}
