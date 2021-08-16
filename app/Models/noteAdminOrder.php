<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class noteAdminOrder extends Model
{
    use HasFactory;
    protected $guarded = [];  
    protected $table = 'note_admin_orders';

    public function fk_note_admin(){
        return $this->belongsTo(User::class,'noteAdminOrder_u_id');
      }
}
