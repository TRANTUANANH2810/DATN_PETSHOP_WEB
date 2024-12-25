<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'order_number', 'total_amount', 'status', 'payment_method'
    ];
    public function getStatusLabelAttribute()
    {
        $statuses = [
            'pending' => 'Đang chờ xử lý',
            'shipped' => 'Đã giao',
            'shipping' => 'Đang giao',
            'canceled' => 'Đã hủy'
        ];

        return $statuses[$this->status] ?? $this->status;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product')
            ->withPivot('quantity')
            ->withTimestamps();
    }
}
