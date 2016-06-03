<?php namespace Leadrive\Test\Models;

use Model;

/**
 * Model
 */
class Config extends Model
{
    use \October\Rain\Database\Traits\SoftDeleting;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = true;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'leadrive_test_config';

    public function scopeIsTypeOne($query)
    {
        return $query->where('field_name', '=', '"type_one"');
    }
    
    protected $dates = ['deleted_at'];
}