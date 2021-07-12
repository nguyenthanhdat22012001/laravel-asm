<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class category extends Model
{
    use HasFactory;
    protected $guarded = [];  
    protected $table = 'categories';
    // protected $primaryKey = 'id';
    // protected $dateFormat = 'U';

    public function category_parent(){
        return $this->belongsTo(category::class,'c_parent');
    }
}
