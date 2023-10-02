<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;
    protected $table ='post';
    protected $primaryKey = 'id_post';
    protected $timestamp = true;
    protected $fillable = [
        'id_cp',
        'slug',
        'title',
        'subtitle',
        'img',
        'hidden',
        'content',
        'hot',
        'views',
        'hot',
    ];
}
