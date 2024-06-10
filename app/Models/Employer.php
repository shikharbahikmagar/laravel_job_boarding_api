<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employer extends Authenticatable
{
    use HasFactory;
    protected $guard = 'teacher';
    protected $fillable = [
    'name',
    'email',
    'password',
];

    protected $hidden = [
    'password',
    'remember_token',
];
}
