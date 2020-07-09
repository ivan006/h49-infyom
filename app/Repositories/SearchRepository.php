<?php

namespace App\Repositories;

use App\Models\Search;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SearchRepository
 * @package App\Repositories
 * @version July 9, 2020, 2:17 pm UTC
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
