<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $guarded = [];  
    protected $table = 'blogs';
    // protected $primaryKey = 'id';
    // protected $dateFormat = 'U';

    public function cateBlog_parent(){
        return $this->belongsTo(categoryBlog::class,'bl_categoryBlog_id');
    }
}
