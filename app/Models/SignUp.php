<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignUp extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'username',
        'password',
        'name',
        'email',
    ];
}
