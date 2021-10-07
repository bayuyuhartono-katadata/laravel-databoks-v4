<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SlugHistoryModel extends Model
{
    protected $table= 'data_statistik_slug_history';

    public function scopeGetIdSlugHistory($query, $slug)
    {
        return $query->where('slug', $slug);
    }
}
