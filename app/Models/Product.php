<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'type', 'description', 'price', 'quantity'
    ];

    protected $hiddem = [

    ];

    public function galleries(){
        // return $this->hasManay('ProductGallery::class', 'products_id');
    }
}
