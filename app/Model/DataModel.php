<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DataModel extends Model
{
    protected $table = 'data';

    public function scopeListData($query, $idData)
    {
        return $query->where('id', $idData);
    }
}
