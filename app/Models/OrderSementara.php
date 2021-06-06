<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DVD;

class OrderSementara extends Model
{
    use HasFactory;
    protected $table="order_sementara"; 
    public $timestamps= false;
    protected $primaryKey = 'id_sorder';
    protected $keyType = "string";

    
   protected $fillable = [
        'id_sorder',
        'id_dvd',
        'harga'
    ];

    public function dvd()
    {
        return $this->belongsTo(DVD::class, 'id_dvd');
    }
}
