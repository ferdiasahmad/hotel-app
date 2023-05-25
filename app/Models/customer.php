<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'customer';
    protected $primaryKey = 'id';
    protected $fillable = [
        'username',
        'email',
        'password',
        'no_telp'
    ];

}
