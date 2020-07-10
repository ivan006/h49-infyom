<?php

namespace App\Repositories;

use App\Models\Contact;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ContactRepository
 * @package App\Repositories
 * @version July 10, 2020, 11:59 am UTC
 *
 * @method Contact findWithoutFail($id, $columns = ['*'])
 * @method Contact find($id, $columns = ['*'])
 * @method Contact first($columns = ['*'])
*/
class ContactRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Contact::class;
    }
}
