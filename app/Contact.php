<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class Contact extends Model
{
    //
    protected $table = 'contacts';
 
  
//fillable columns database myworspace table sumittals
    protected $fillable = [
        
    	'first_name',
        'last_name',
        'company',
    	'role',
    	'phone_number',
        'email'
       
    	
    ];
}
