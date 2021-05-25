<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    use HasFactory;
    protected $table="penyewaan_dvd"; 
    public $timestamps= false;
    protected $primaryKey = 'id_penyewaan';
    protected $keyType = "string";

    
   protected $fillable = [
        'id_penyewaan',
        'id_user',
        'id_dvd',
        'tanggal_sewa',
        'tanggal_kembali',
        'harga_sewa'
    ];
}
