<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'service_descp',
        'service_total_emp',
        'service_img_id',
        'project_id',
        'service_status',
        'created_at',
        'updated_at'
    ];
}
