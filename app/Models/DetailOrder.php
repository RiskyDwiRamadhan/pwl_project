<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\DVD;

class DetailOrder extends Model
{
    use HasFactory;
    protected $table="detail_order"; 
    public $timestamps= false;
    protected $primaryKey = 'id_dorder';
    protected $keyType = "string";

    
   protected $fillable = [
        'id_dorder',
        'id_order',
        'id_dvd',
        'harga'
    ];

   public function order()
   {
       return $this->belongsTo(Order::class, 'id_order');
   }

   public function dvd()
   {
       return $this->hashMany(DVD::class, 'id_dvd');
   }
}
