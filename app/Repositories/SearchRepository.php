<?php

namespace App\Repositories;

use App\Models\Search;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SearchRepository
 * @package App\Repositories
 * @version July 10, 2020, 11:59 am UTC
 *
 * @method Search findWithoutFail($id, $columns = ['*'])
 * @method Search find($id, $columns = ['*'])
 * @method Search first($columns = ['*'])
*/
class SearchRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'status_flag',
        'status_note'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Search::class;
    }
}
