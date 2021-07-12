<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
      protected $guarded = [];  
    protected $table = 'products';

    public function fk_category(){
      return $this->belongsTo(category::class,'p_category_id');
  }
  public function fk_brand(){
    return $this->belongsTo(brand::class,'p_brand_id');
}

}
