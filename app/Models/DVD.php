<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderSementara;
use App\Models\DetailOrder;

class DVD extends Model
{
    use HasFactory;
    protected $table="dvd"; 
    public $timestamps= false;
    protected $primaryKey = 'id_dvd';
    protected $keyType = "string";

    
   protected $fillable = [
        'id_dvd',
        'nama_dvd',
        'harga_dvd',
        'status_dvd',
        'stok',
        'image_dvd'
    ];
    public function dorder()
    {
        return $this->hashMany(DetailOrder::class, 'id_dvd');
    }
    public function sorder()
    {
        return $this->hashMany(OrderSementara::class, 'id_dvd');
    }
    public function status()
    {
        return $this->belongsTo(status::class);
    }
}
