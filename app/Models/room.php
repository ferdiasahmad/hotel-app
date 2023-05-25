<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'room';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'description',
        'price',
        'status',
        'image'
    ];
}
