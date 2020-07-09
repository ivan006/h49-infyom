<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Page
 * @package App\Models
 * @version July 9, 2020, 2:16 pm UTC
 *
 * @property string url
 * @property string title
 * @property integer status
 * @property boolean isCrawled
 */
class Page extends Model
{
    use SoftDeletes;

    public $table = 'pages';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'url',
        'title',
        'status',
        'isCrawled'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'url' => 'string',
        'title' => 'string',
        'status' => 'integer',
        'isCrawled' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'url' => 'required',
        'isCrawled' => 'required'
    ];

    
}
