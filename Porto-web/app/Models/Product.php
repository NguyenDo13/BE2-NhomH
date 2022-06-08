<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['category_id','name','price','image','description'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
