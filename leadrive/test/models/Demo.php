<?php namespace Leadrive\Test\Models;

use Model;

/**
 * Model
 */
class Demo extends Model
{
    public $belongsTo = [
        'type' => ['Leadrive\Test\Models\Config', 
            'conditions' => 'field_name = "type_one"'
            //'scope' => 'isTypeOne'
            ],
    ];

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'leadrive_test_demo';
}