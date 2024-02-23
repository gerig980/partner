<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = ['title','title_en','description','description_en','location','date','time','image','other_images'];
    protected $casts = ['other_images' => 'array'];
    protected $dates = ['date'];
}
