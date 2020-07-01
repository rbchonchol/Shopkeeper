<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class Category extends Model
{
    protected $fillable = [
        'name','link'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
