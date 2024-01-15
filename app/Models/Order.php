<?php

namespace App\Models;

use App\Models\OrderService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable =[
        'user_id',
        'fname',
        'lname',
        'email',
        'phonenumber',
        'specificl',
        'address2',
        'county',
        'constituency',
        'Ward',
        'landmark',
        'status',
        'tracking_no',
        'orgname',
    ];

    //public function orderservices()
    //{
       // return $this->hasMany(OrderService::class);
    //}
    public function orderservice()
    {
        return $this->hasMany(OrderService::class);
    }

}
