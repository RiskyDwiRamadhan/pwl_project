<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userku extends Model
{
    protected $table ="users";
    public $timestamps = false;
    protected $primaryKey ="id";

    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'role',
    ];
}
