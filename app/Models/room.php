<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'image',
        'management_id'

    ];
    public function management()
    {
        return $this->belongsTo(management::class, 'management_id', 'id');
    }

}
