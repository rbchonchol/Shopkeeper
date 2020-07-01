<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'short_description', 'brand_id',
        'label_id', 'picture', 'description',
        'totoal_sels', 'product_type', 'is_new',
        'cost', 'mrp', 'special_price',
        'soft_delete', 'is_draft', 'is_active','category_id','stock'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
