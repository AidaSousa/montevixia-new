<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'date_event',
        'price_no_associated',
        'price_associated',
        'date_finilized',
        'category_id',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class)->withPivot('id', 'quantity', 'total_price', 'payment_id');
    }
}
