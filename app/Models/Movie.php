<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'synopsis',
        'release_year',
        'duration_min',
        'rating',
        'audience',
        'url_trailer'
    ];

    public function actors() {
        return $this->belongsToMany(Actor::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }
}
