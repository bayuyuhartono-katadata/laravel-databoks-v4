<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RelDataSingleModel extends Model
{
    protected $table = 'rel_datastatistik_single';
    
    public function scopeRelData($query, $idDataPublish)
    {
        return $query->where('id_datapublish', $idDataPublish);
    }
}
