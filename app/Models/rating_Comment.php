<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rating_Comment extends Model
{
    use HasFactory;
    protected $table = 'rating__comments';
    protected $guarded = [];  

    public function fk_userRatingComment(){
        return $this->belongsTo(User::class,'rc_u_id');
      }
}
