<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Search
 * @package App\Models
 * @version July 10, 2020, 11:59 am UTC
 *
 * @property string status_flag
 * @property string status_note
 */
class Search extends Model
{
    use SoftDeletes;

    public $table = 'searches';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'status_flag',
        'status_note'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'status_flag' => 'string',
        'status_note' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'status_flag' => 'required',
        'status_note' => 'required'
    ];

    
}
