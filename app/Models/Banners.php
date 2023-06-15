<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'img_src',
        'img_dimensions',
        'img_extensions',
        'img_status',
        'img_descp',
        'created_at',
        'updated_at'
    ];
}
