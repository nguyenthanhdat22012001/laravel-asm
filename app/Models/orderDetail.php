<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderDetail extends Model
{
    use HasFactory;
    protected $guarded = [];  
    protected $table = 'order_details';


    public function fk_order(){
        return $this->belongsTo(order::class,'orD_or_id');
      }
}
