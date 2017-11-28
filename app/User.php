<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 
        'nombre', 'apellidos', 'birthday_day', 'birthday_month', 'birthday_year', 'gender', 'telefono', 'cp', 'poblacion', 'provincia', 'club',
         

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function activities()
    {
        return $this->hasMany('App\Activities','author_id');
    }

    public function can_post()
    {
        $role = $this->role;
        if($role == 'user' || $role == 'admin')
        {
            return true;
        }
        return false;
    }

    public function is_admin()
    {
        $role = $this->role;
        if($role == 'admin')
        {
            return true;            
        }
        return false;
    }

}
