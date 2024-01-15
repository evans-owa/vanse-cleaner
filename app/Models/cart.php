<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $tale = "carts";
    protected $fillable = [

        'user_id',
        'idservice',
        'Area',
        'nameservices',
    ];

    public function service(){
        return $this->belongsTo(service1::class,'idservice','idservice');
    }
}
