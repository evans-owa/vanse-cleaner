<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\service1;

class OrderService extends Model
{
    use HasFactory;
    protected $table = 'order_services';
    protected $fillable =[

            'wait_id',
            'serviceid',
            'Area',
            'price',
            'orgname',
            'orgid',

    ];

    public function services(): BelongsTo
    {
        return $this->belongsTo(service1::class, 'serviceid', 'idservice');
    }

    public function service2()
    {
        return $this->hasMany(service1::class);
    }

}
