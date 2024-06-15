<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Popper extends Model
{
    use HasFactory;

    protected $table = 'poppers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'image'
    ];
}
