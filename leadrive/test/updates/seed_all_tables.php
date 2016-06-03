<?php namespace Leadrive\Test\Updates;

use Leadrive\Test\Models\Config;
use Leadrive\Test\Models\Demo;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder
{
    public function run()
    {
        Config::create(['id' => 1, 'field_name' => 'type_one', 'name' => 'Type_One_1', 'deleted_at' => null]);
        Config::create(['id' => 2, 'field_name' => 'type_one', 'name' => 'Type_One_2', 'deleted_at' => '2016-06-03 14:35:12']);
        Config::create(['id' => 1, 'field_name' => 'type_two', 'name' => 'Type_Two_1', 'deleted_at' => null]);

        Demo::create(['title' => 'List record 1',     'type_id' => 1]);
        Demo::create(['title' => 'List record 2',     'type_id' => 2]);
    }
}
