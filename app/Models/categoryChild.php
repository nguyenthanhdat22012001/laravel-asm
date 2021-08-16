<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryChild extends Model
{
    use HasFactory;
    protected $guarded = [];  
    protected $table = 'category_children';

    public function category_parent(){
        return $this->belongsTo(category::class,'cchil_parent');
    }
}
