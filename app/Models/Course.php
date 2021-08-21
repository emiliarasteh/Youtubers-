<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'description',
        'price',
        'duration'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
