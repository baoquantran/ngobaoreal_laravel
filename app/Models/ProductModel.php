<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table ='product';
    protected $primaryKey = 'id_pro';
    protected $timestamp = true;
    protected $fillable = [
        'id_room',
        'id_status',
        'adress',
        'from_price',
        'to_price',
        'acreage',
        'img',
        'slug',
        'content',
        'hide',
        'kygui',
        'tongquan',
        'vitri',
        'tienich',
        'matbang',
        'thanhtoan',
        'progress'
    ];
}
