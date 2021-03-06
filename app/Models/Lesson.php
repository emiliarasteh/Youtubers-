<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'duration',
        'video',
        'image',
        'order',
        'course_id'
    ];


    public function course()
    {
        return $this->hasOne(Course::class);
    }
}
