<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{

    protected $table = "users";

    protected $fillable = [
        'name_pal',
        'name',
        'address',
        'phone',
        'email',
        'password',
    ];


}
