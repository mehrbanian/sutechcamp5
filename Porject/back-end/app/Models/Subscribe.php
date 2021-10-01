<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    use HasFactory;

    public CONST prices = [15000, 40000, 75000];

    protected $guarded = [];
    protected $dates = ['expired_at'];


    public function user() {
        return $this->belongsTo(User::class);
    }
}
