<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialType extends Model
{
    use HasFactory;

    public function socialLinks(){
        return $this->hasMany(SocialLink::class, 'id');
    }
}
