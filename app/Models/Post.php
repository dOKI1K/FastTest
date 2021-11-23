<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $with = ['author'];

    protected $guarded = [];

    public function scopeFilter($query, array $filters) {

        $query->when($filters['search'] ?? false, function($query, $search) { 
            return $query
                ->where('title', 'like', '%'.$search.'%')
                ->orWhere('body', 'like', '%'.$search.'%');
        });
    }


    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
