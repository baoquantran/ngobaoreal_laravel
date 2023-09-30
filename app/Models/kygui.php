<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kygui extends Model
{
    use HasFactory;
    protected $table = 'kygui';
    protected $primaryKey = 'id_kygui';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'type',
        'status',
    ];
}
