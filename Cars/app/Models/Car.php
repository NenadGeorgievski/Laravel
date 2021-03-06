<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['category', 'owner'];

    

    public function scopeFilter($query, array $filters)
    {
            $query->when($filters['search'] ?? false, fn($query,$search) => 
            $query
                ->where('model', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')
                ->orWhere('excerpt', 'like', '%' . $search . '%'));
            
    }

    public function owner()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
