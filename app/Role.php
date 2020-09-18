<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Role extends Model
{
    public function role($name)
    {
        return $this->name=$name;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * App\User relationship
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'users_roles');
    }
}
