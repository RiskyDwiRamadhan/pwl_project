<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetaiOrder;

class Order extends Model
{
    use HasFactory;
    protected $table="order"; 
    public $timestamps= false;
    protected $primaryKey = 'id_sewa';
    protected $keyType = "string";

    
   protected $fillable = [
        'id_sewa',
        'id_user',
        'tanggal_sewa',
        'tanggal_kembali',
        'harga_sewa'
    ];

    public function dorder()
    {
        return $this->hashMany(DetailOrder::class, 'id_dorder');
    }
}
