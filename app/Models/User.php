<?php

namespace App\Models;

<<<<<<< HEAD
// use Illuminate\Contracts\Auth\MustVerifyEmail;
=======
>>>>>>> temp-branch
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
<<<<<<< HEAD
=======
    use HasApiTokens, HasFactory, Notifiable;

>>>>>>> temp-branch
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'cooperativa',
        'cargo',
        'password',
        'segregacao',
<<<<<<< HEAD
    
=======
>>>>>>> temp-branch
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'ativo' => 'boolean',
<<<<<<< HEAD
        'google2fa_secrete' => 'boolean',
=======
        'google2fa_screte' => 'boolean',
>>>>>>> temp-branch
        'can_be_admin' => 'boolean',
        'can_be_user' => 'boolean',
        'can_edit' => 'boolean',
        'can_delete' =>'boolean',
        'can_see' => 'boolean',
<<<<<<< HEAD
        
    ];
}
=======
    ];
}
>>>>>>> temp-branch
