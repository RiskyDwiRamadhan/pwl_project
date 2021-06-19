<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userku extends Model
{
    protected $table ="userku";
    public $timestamps = false;
    protected $primaryKey ="id";

    protected $fillable = [
        'email',
        'username',
        'password'
    ];
}
