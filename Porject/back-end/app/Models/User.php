<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable {
    use HasApiTokens, HasFactory, Notifiable;


    public const ADMIN = 1;
    public const AUTHOR = 2;
    public const USER = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'bio'
    ];

    protected $guarded = [
        'role',
        'wallet'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(){
        $this->hasMany(Post::class);
    }

    public function subscribes() {
        return $this->hasMany(Subscribe::class);
    }

    public function is_vip() {
        $sub = $this->subscribes()->where('expired_at', '>', now())->first();
        if (is_null($sub))
            return false;
        return true;
    }
}
