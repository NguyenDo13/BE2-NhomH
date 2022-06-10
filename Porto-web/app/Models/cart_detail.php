<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cart_detail extends Model
{
     use SoftDeletes;

     protected $table = 'cart_details';
     protected $primaryKey = 'id_cart';
     
     protected $fillable = [
         'id_cart', 'id_prod', 'size', 'qty',
     ];
}
