<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Product;
class OrderItems extends Model
{
    use HasFactory;
    public $timestamps=true;
    public $table= 'order_items';
    protected $fillable=[
        'order_id',
        'product_id',
        'quantity',
        'price'
            ];

   
    public function products()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
