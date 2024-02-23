<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =['name','category','brand','pieces','package','system_code','barcode','packet_code','lifespan','image'];
}
