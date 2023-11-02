<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    /**
     * Scope a query to only include online and not deleted records
     * NOTE: Chaining multiple scopes via an 'or' query operator,
     * requires 'orWhere' method to be used closure or
     * as a 'higher order' method (see docs)
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOnline($query)
    {
        return $query->where('online', 1)->where(function ($query) {
            $query->where('deleted', 0)->orWhereNull('deleted');
        });//->whereRaw('not deleted <=> 2');
    }
}
