<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_description',
        'product_price',
        'product_image',
    ];

    protected $primaryKey = 'id_product';

    public function stock()
    {
        return $this->hasOne(Stock::class, 'id_product');
    }
}
