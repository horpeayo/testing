<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserView extends Model
{
  

        protected $table ="students";
        protected $fillable=[
        	'Username',	'Password',	'MatricNo','created_at','updated_at'

        ];
         /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'Password', 'remember_token',
    ];

}

