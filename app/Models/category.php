<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $table='categories';
    protected $fillable=[
        'name',
        'slog',
        'description',
        'image',
        'mata_title',
        'mata_description',
        'mata_keyword',
        'navbar_status',
        'status',
        'created_by',

    ];
}
