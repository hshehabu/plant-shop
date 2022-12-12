<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItems;

class Order extends Model
{
    use HasFactory;
    public $timestamps=true;
    public $table= 'orders';
    protected $fillable=[
        'user_id',
        'name',
        'lname',
        'status',
        'phone',
        'total'
            ];

    public function orderitems(){
            return $this->hasMany(OrderItems::class);
    }
   
}
