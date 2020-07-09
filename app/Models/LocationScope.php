<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LocationScope
 * @package App\Models
 * @version July 9, 2020, 2:17 pm UTC
 *
 * @property string coords
 */
class LocationScope extends Model
{
    use SoftDeletes;

    public $table = 'location_scopes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'coords'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'coords' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'coords' => 'required'
    ];

    
}
