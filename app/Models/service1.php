<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;

class service1 extends Model
{
    use HasFactory;
    protected $table ='service1';

    protected $fillable = [
        'id',
        'category_id',
        'id_service',
        'service_name',
        'description',
        'image',
        'status',
        'category',
        'Trending',
        'meta_keywords',
        'Price',
    ];

    public function category() {
        return $this->belongsTo(category::class, 'category_id', '');
        }
}
