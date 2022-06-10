<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\CartDetail;




class Cart extends Model
{
    //khai báo bảng để sử dụng cho Eloquent, mặc định sẽ ngầm hiểu tên bảng là tên lớp viết thường + s
    // protected $table = 'carts';
    //khai báo khóa chính, mặc định sẽ ngầm hiểu khóa chính là thằng có increment
    // protected $id = 'id';
    //có thể khai báo thêm một vài trường để xử lý tiếp
    public function getDetail(){
        return $this->hasMany('CartDetail');
    }
}