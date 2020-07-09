<?php

namespace App\Repositories;

use App\Models\LocationScope;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LocationScopeRepository
 * @package App\Repositories
 * @version July 9, 2020, 2:17 pm UTC
 *
 * @method LocationScope findWithoutFail($id, $columns = ['*'])
 * @method LocationScope find($id, $columns = ['*'])
 * @method LocationScope first($columns = ['*'])
*/
class LocationScopeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'coords'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return LocationScope::class;
    }
}
