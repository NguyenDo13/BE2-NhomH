<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\CartDetail;
use Illuminate\Database\Eloquent\SoftDeletes;




class Cart extends Model
{
    use SoftDeletes;

    protected $table = 'carts';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'id', 'id_user',
    ];
    
    public function getDetail(){
        return $this->hasMany('CartDetail');
    }
}
