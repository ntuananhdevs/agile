<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'user_name', 'guest_fullname', 'guest_email', 'guest_phone',
        'shipping_address', 'total_amount', 'payment_method', 'payment_status',
        'shipping_status', 'order_date', 'notes'
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function returnRequests()
    {
        return $this->hasMany(ReturnRequest::class);
    }
}

class OrderDetail extends Model
{
    protected $table = 'order_details';
}

class ReturnRequest extends Model
{
    protected $table = 'return_requests';
}
