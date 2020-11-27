<?php

namespace App\Http\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $fillable = [
        'user_name', 'name', 'email', 'role', 'password'
    ];

    public function getName(String $user_id)
    {
        return $this->where('id', '=', $user_id)->value('name');
    }

    public function getEmail(String $user_id)
    {
        return $this->where('id', '=', $user_id)->value('email');
    }

    public function getCommitteeUsers()
    {
        return $this->where('role', '=', '1')->get();
    }

    public function getClubUsers()
    {
        return $this->where('role', '=', '2')->get();
    }
}
