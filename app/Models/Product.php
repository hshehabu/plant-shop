<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Product extends Model
{
    use HasFactory;
    public $table='product';
    protected $fillable = [
        'name',
        'description',
        'cate_id',
        'original_price',
        'selling_price',
        'user_id',
        'quantity',
        'status',
        'trending',
        'gallery'
    ];
        
    public function user(){

        return $this->belongsTo(User::class);
    }
   public function category(){
       return $this->belongsTo(Category::class,'cate_id','id');
   }
}
