<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    
    protected $table = 'blogs'; 

    protected $fillable = [
        'meta_title',
        'meta_description',
        'meta_keyword',
        'title',
        'slug',
        'description_short',
        'img',
        'alt_tag',
        'details',
        
    ];
}
