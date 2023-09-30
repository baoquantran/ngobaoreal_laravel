<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class baogia extends Model
{
    use HasFactory;
    protected $table = 'baogia';
    protected $primaryKey = 'id_baogia';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'note',
        'status',
    ];
}
