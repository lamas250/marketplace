<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    protected $table = 'user_orders';
    protected $fillable = [
        'reference', 'pagseguro_status', 'pagseguro_code','items','store_id','user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }

}
