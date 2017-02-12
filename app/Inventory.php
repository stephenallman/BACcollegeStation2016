<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;



class Inventory extends Model
{
    //
     protected $table = 'inventories';
 
  
//fillable columns database myworspace table sumittals
    protected $fillable = [
        
    	'install_date',
    	'location',
    	'serial_number',
    	'date_replaced',
        
     ];
}
