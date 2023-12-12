<?php

// app/Models/Lesson.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table="lessons";
    protected $fillable = [
        'title', 'instructor', 'price', 'image_path', 'documents', 'videos', 'description',
        
    ];

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}

