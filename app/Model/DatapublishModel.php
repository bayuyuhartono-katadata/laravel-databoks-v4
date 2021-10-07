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

    public function scopeDetailContent($query, $id, $slug)
    {
        if ($id != '') {
            return $query->where('id', $id)
            ->orderBy('date_published', 'asc');
        } else {
            return $query->where('slug', $slug)
                ->orderBy('date_published', 'asc');
        }
    }
}
