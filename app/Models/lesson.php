<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'title','image_url', 'documents', 'video_url', 'description',
    ];
    
}
