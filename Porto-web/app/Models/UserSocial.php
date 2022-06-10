<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'provider_user_id', 'provider', 'user', 'provider_user_email'
    ];
    protected $primaryKey = 'user_id';
    protected $table = 'usersgg';

    public function login_customer_google()
    {
      return $this->belongsTo('App\Models\Login', 'user');
    }
}