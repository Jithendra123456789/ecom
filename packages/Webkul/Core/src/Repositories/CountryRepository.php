<?php

namespace Webkul\Core\Repositories;

use Prettus\Repository\Traits\CacheableRepository;
use Webkul\Core\Eloquent\Repository;

class CountryRepository extends Repository
{
    use CacheableRepository;

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model(): string
    {
        return 'Webkul\Core\Contracts\Country';
    }
}
