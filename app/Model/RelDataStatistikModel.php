<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RelDataStatistikModel extends Model
{
    protected $table = 'rel_data_statistik_data';
    
    public function scopeRelData($query, $idDataPublish)
    {
        return $query->where('id_data_statistik', $idDataPublish);
    }
}
