<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contact
 * @package App\Models
 * @version July 9, 2020, 2:16 pm UTC
 *
 * @property string source_place_id
 * @property string first_name
 * @property string last_name
 * @property string email
 * @property string title
 * @property string location
 * @property string linkedin
 * @property string company
 * @property string company_website
 * @property string company_industry
 * @property string company_founded
 * @property string company_size
 * @property string company_linkedin
 * @property string company_headquarters
 */
class Contact extends Model
{
    use SoftDeletes;

    public $table = 'contacts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'source_place_id',
        'first_name',
        'last_name',
        'email',
        'title',
        'location',
        'linkedin',
        'company',
        'company_website',
        'company_industry',
        'company_founded',
        'company_size',
        'company_linkedin',
        'company_headquarters'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'source_place_id' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'title' => 'string',
        'location' => 'string',
        'linkedin' => 'string',
        'company' => 'string',
        'company_website' => 'string',
        'company_industry' => 'string',
        'company_founded' => 'string',
        'company_size' => 'string',
        'company_linkedin' => 'string',
        'company_headquarters' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'source_place_id' => 'required'
    ];

    
}
