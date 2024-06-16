<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mdear extends Model
{
    use HasFactory;

    protected $fillable = [
        'popper_id',
        'title',
        'content',
        'isPublic'
    ];

    protected $table = 'mdears';
    protected $primaryKey = 'id';
}
