<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DatapublishModel extends Model
{
    protected $table = 'data_statistik';

    public function scopeListSlider($query)
    {
        return $query->where('status', 1)
            ->orderBy('date_published', 'desc')
            ->limit(2);
    }

    public function scopeListTerkini($query)
    {
        return $query->where('status', 1)
            ->orderBy('date_published', 'desc')
            ->limit(12);
    }

    public function scopeListTerpopuler($query)
    {
        return $query->where('status', 1)
            ->orderBy('date_published', 'asc')
            ->limit(3);
    }
}
