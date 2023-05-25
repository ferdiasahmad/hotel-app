<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'transaction';
    protected $primaryKey = 'id';
    protected $fillable = [
        'transaction_date',
        'invoice'
    ];
}
