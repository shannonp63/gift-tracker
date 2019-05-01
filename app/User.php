<?php
namespace App;

use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cartalyst\Sentinel\Users\EloquentUser;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Log;

class User extends EloquentUser
{
    use SoftDeletes, Authorizable;

    protected $primaryKey = 'id';
    protected $table = 'users';
    protected $loginNames = ['email_address'];
    protected $fillable = [
        'email_address',
        'password',
        'permissions',
        'person_id',
        'facebook_id'
    ];
    protected $hidden = ['password'];

    public function addNew($input)
    {
        $check = self::where('facebook_id',$input['facebook_id'])->first();
        if(is_null($check)){
            return self::create($input);
        }
        return $check;
    }

    public function person()
    {
        return $this->hasOne('App\Person');
    }
}
