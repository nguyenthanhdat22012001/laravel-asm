<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $guarded = [];  
    protected $table = 'orders';
    
    public function fk_order_user(){
        return $this->belongsTo(User::class,'or_u_id');
      }

    public function get_orderDetail(){
    return $this->hasMany(orderDetail::class,'orD_or_id');
    }
    public function fk_order_payment(){
      return $this->belongsTo(payment::class,'or_pay_id');
    }
}
