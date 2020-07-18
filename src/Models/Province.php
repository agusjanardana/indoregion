<?php

/*
 * This file is part of the IndoRegion package.
 *
 * (c) Ibnul Mutaki < cacing69 | ibnuul@gmail.com>
 *
 */

namespace AzisHapidin\IndoRegion\Models;

use AzisHapidin\IndoRegion\Traits\ProvinceTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Province Model.
 */
class Province extends Model
{
    use ProvinceTrait;

    public function getTable()
    {
        return config('indoregion.table.province');
    }

    /**
     * Province has many regencies.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function regencies()
    {
        return $this->hasMany(config('indoregion.models.regency'));
    }
}