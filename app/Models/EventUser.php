<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class EventUser extends Model
{
    use HasFactory;

    protected $table = 'event_user';

    protected $fillable = [
        'event_id',
        'user_id',
        'child_id',
        'phone_contact',
        'matriculado_centro',
        'directo_comedor',
        'necesidades_especiales',
        'quantity',
        'total_priice',
        'payment_id',
        'is_paid',
    ];

    public function event() {
        return $this->belongsTo(Event::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function child() {
        return $this->belongsTo(Child::class);
    }
}
