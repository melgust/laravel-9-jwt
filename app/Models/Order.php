<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'tt_order';
    protected $primaryKey = 'order_id';
    public $timestamps = false;

    protected $fillable = [
        'customer_name',
        'customer_email',
    ];

    public function order_detail()
    {
        return $this->belongsToMany(Product::class, 'tt_order_detail', 'order_id', 'product_id')->withPivot(['quantity', 'amount']);
    }

    /*public function detail()
    {
        return $this->belongsToMany(Product::class, 'tt_order_detail', 'order_id', 'product_id')->withPivot(['quantity']);
    }*/

    /*public function detail()
    {
        return $this->belongsToMany(OrderDetail::class, 'tt_order_detail', 'order_id', 'product_id');
    }*/

}
