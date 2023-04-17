<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public function files(){
        return $this->hasMany(File::class, 'id');
    }

    public function products(){
        return $this->hasMany(Product::class, 'id');
    }
}
