<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'products';
      protected $guarded = [];  
    

    public function fk_category(){
      return $this->belongsTo(category::class,'p_category_id');
  }
    public function fk_brand(){
      return $this->belongsTo(brand::class,'p_brand_id');
  }
  public function fk_discount(){
    return $this->belongsTo(discount::class,'p_discount_id');
  }
  public function category_child(){
    return $this->hasMany(category::class,'p_category_id');
  }
public function getAllData()
{
    $data = product::where('p_active',1)->get();
    return response()->json($data, 200);
}
}
