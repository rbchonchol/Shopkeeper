<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['bio','web','facebook','twitter','github','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
