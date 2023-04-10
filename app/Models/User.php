<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'password',
        'state_id',
        'user_type_id'
        
    ];
}
