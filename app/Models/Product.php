<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'tc_product';
    protected $primaryKey = 'product_id';
    public $timestamps = false;
    protected $fillable = ['reference', 'name', 'description', 'price'];
    /*protected $attributes = [
        'created_at' => 'NOW()',
        'status_id' => 1
    ];*/

    public function order()
    {
        return $this->belongsToMany(Order::class, 'tt_order_detail', 'product_id', 'order_id');
    }
    
}
