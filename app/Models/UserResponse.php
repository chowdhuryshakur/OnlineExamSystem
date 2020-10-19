<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResponse extends Model
{
    protected $dates = ['created_at'];
    protected $primaryKey = 'response_id';
}
