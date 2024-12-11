<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
  
    use HasFactory,SoftDeletes;

    protected $fillable = [     
        'name','email','phone','id_proof','password'
       ];
      
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    

   
}
