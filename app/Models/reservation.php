<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class reservation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'reservation';
    protected $primaryKey = 'id';
    protected $fillable = [
        'date_in',
        'date_out',
        'total_payment',
        'invoice',
        'customer_id',
        'status',
        'room_id',
        'name',
        'email',
        'management_id'

    ];
    /**
     * Get the user that owns the reservation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function room(): BelongsTo
    {
        return $this->belongsTo(room::class, 'room_id', );
    }
    public function customer(): BelongsTo
    {
        return $this->belongsTo(customer::class, 'customer_id', );
    }
    public function management(): BelongsTo
    {
        return $this->belongsTo(management::class, 'management_id', );
    }
}
