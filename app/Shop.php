<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Shop extends Model
{
    protected $fillable = ['name', 'image', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
