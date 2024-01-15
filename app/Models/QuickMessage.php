<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuickMessage extends Model
{
    use HasFactory;

    Protected $table="quickmessage";
    protected $primaryKey = 'customer_id';
}
