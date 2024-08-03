<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        if ($filters['tag'] ?? false) {
            $tag = request('tag');
            $query->where('tags', 'like', "%$tag%");
        }

        if ($filters['search'] ?? false) {
            $search = request('search');
            $query->where('title', 'like', "%$search%")
                ->orWhere('company', 'like', "%$search%")
                ->orWhere('tags', 'like', "%$search%")
                ->orWhere('location', 'like', "%$search%")
                ->orWhere('description', 'like', "%$search%");
        }
    }
}
