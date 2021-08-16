@extends('layout.backend')
@section('title','Thêm Mới Sản Phẩm')
@section('content')
<div class="col-lg-12">
@if ($errors->first('p_name'))
    <div class="alert alert-dismissible fade show alert-danger" role="alert">
             {{$errors->first('p_name')	}}
	</div>
@endif

@if ($errors->first('p_category_id'))
    <div class="alert alert-dismissible fade show alert-danger" role="alert">
             {{$errors->first('p_category_id')	}}
	</div>
@endif

@if ($errors->first('p_sku'))
    <div class="alert alert-dismissible fade show alert-danger" role="alert">
             {{$errors->first('p_sku')	}}
	</div>
@endif

@if ($message = Session::get('success'))
            <div class="alert alert-dismissible fade show alert-success" role="alert">
                <strong>{{ $message }}</strong>
            </div>
 @endif


<form action="{{route('get_backend.product.store')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="col-lg-6 float-left">
<div class="card card-default">
        <div class="card-body">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tiêu Đề<span style="color:red">*</span> </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="p_name" placeholder="Nhập Tiêu Đề Sản Phẩm" value="{{ old('p_name',) }}">
                <div id="pwm-inline-icon-16655" class="pwm-field-icon" style="position: absolute !important; width: 18px !important; height: 18px !important; min-height: 0px !important; min-width: 0px !important; z-index: 2147483645 !important; box-shadow: none !important; box-sizing: content-box !important; background: none !important; border: none !important; padding: 0px !important; cursor: pointer !important; outline: none !important; margin-top: -60.2033px; margin-left: 391.972px;"><svg style="display: inline-block !important; width: 16px !important; height: 16px !important; fill: rgb(230, 0, 23) !important; margin-top: 0.5px !important; position: absolute !important; top: 0px !important; left: 0px !important;" viewBox="0 0 64 64"><g><path d="m20,28.12a33.78,33.78 0 0 1 13.36,2.74a22.18,22.18 0 0 1 0.64,5.32c0,9.43 -5.66,17.81 -14,20.94c-8.34,-3.13 -14,-11.51 -14,-20.94a22.2,22.2 0 0 1 0.64,-5.32a33.78,33.78 0 0 1 13.36,-2.74m0,-28.12c-8.82,0 -14,7.36 -14,16.41l0,5.16c2,-1.2 2,-1.49 5,-2.08l0,-3.08c0,-6.21 2.9,-11.41 8.81,-11.41l0.19,0c6.6,0 9,4.77 9,11.41l0,3.08c3,0.58 3,0.88 5,2.08l0,-5.16c0,-9 -5.18,-16.41 -14,-16.41l0,0zm0,22c-6.39,0 -12.77,0.67 -18.47,4a31.6,31.6 0 0 0 -1.53,9.74c0,13.64 8.52,25 20,28.26c11.48,-3.27 20,-14.63 20,-28.26a31.66,31.66 0 0 0 -1.54,-9.77c-5.69,-3.3 -12.08,-4 -18.47,-4l0,0l0.01,0.03z"></path><path d="m21.23,39.5a2.81,2.81 0 0 0 1.77,-2.59a2.94,2.94 0 0 0 -3,-2.93a3,3 0 0 0 -3,3a2.66,2.66 0 0 0 1.77,2.48l-1.77,4.54l6,0l-1.77,-4.5z"></path></g></svg><span id="pwm-inline-icon-badge-16655" style="position: absolute !important; inset: auto auto 0px 7px !important; box-sizing: content-box !important; font-family: monospace !important; font-size: 9px !important; border-radius: 2px !important; color: white !important; background: rgb(112, 185, 52) !important; border: 0.5px solid white !important; width: auto !important; height: 10px !important; min-width: 10px !important; min-height: 0px !important; display: flex !important; align-items: center !important; justify-content: center !important; pointer-events: none !important;">0</span></div></div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Mã Sản Phẩm<span style="color:red">*</span> </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="p_sku" placeholder="Nhập Mã Sản Phẩm" value="{{ old('p_sku',) }}">
                <div id="pwm-inline-icon-16655" class="pwm-field-icon" style="position: absolute !important; width: 18px !important; height: 18px !important; min-height: 0px !important; min-width: 0px !important; z-index: 2147483645 !important; box-shadow: none !important; box-sizing: content-box !important; background: none !important; border: none !important; padding: 0px !important; cursor: pointer !important; outline: none !important; margin-top: -60.2033px; margin-left: 391.972px;"><svg style="display: inline-block !important; width: 16px !important; height: 16px !important; fill: rgb(230, 0, 23) !important; margin-top: 0.5px !important; position: absolute !important; top: 0px !important; left: 0px !important;" viewBox="0 0 64 64"><g><path d="m20,28.12a33.78,33.78 0 0 1 13.36,2.74a22.18,22.18 0 0 1 0.64,5.32c0,9.43 -5.66,17.81 -14,20.94c-8.34,-3.13 -14,-11.51 -14,-20.94a22.2,22.2 0 0 1 0.64,-5.32a33.78,33.78 0 0 1 13.36,-2.74m0,-28.12c-8.82,0 -14,7.36 -14,16.41l0,5.16c2,-1.2 2,-1.49 5,-2.08l0,-3.08c0,-6.21 2.9,-11.41 8.81,-11.41l0.19,0c6.6,0 9,4.77 9,11.41l0,3.08c3,0.58 3,0.88 5,2.08l0,-5.16c0,-9 -5.18,-16.41 -14,-16.41l0,0zm0,22c-6.39,0 -12.77,0.67 -18.47,4a31.6,31.6 0 0 0 -1.53,9.74c0,13.64 8.52,25 20,28.26c11.48,-3.27 20,-14.63 20,-28.26a31.66,31.66 0 0 0 -1.54,-9.77c-5.69,-3.3 -12.08,-4 -18.47,-4l0,0l0.01,0.03z"></path><path d="m21.23,39.5a2.81,2.81 0 0 0 1.77,-2.59a2.94,2.94 0 0 0 -3,-2.93a3,3 0 0 0 -3,3a2.66,2.66 0 0 0 1.77,2.48l-1.77,4.54l6,0l-1.77,-4.5z"></path></g></svg><span id="pwm-inline-icon-badge-16655" style="position: absolute !important; inset: auto auto 0px 7px !important; box-sizing: content-box !important; font-family: monospace !important; font-size: 9px !important; border-radius: 2px !important; color: white !important; background: rgb(112, 185, 52) !important; border: 0.5px solid white !important; width: auto !important; height: 10px !important; min-width: 10px !important; min-height: 0px !important; display: flex !important; align-items: center !important; justify-content: center !important; pointer-events: none !important;">0</span></div></div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Giá Sản Phẩm (VNĐ) </label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="p_price" placeholder="Nhập Giá Sản Phẩm" value="{{ old('p_price',0) }}">
                <div id="pwm-inline-icon-16655" class="pwm-field-icon" style="position: absolute !important; width: 18px !important; height: 18px !important; min-height: 0px !important; min-width: 0px !important; z-index: 2147483645 !important; box-shadow: none !important; box-sizing: content-box !important; background: none !important; border: none !important; padding: 0px !important; cursor: pointer !important; outline: none !important; margin-top: -60.2033px; margin-left: 391.972px;"><svg style="display: inline-block !important; width: 16px !important; height: 16px !important; fill: rgb(230, 0, 23) !important; margin-top: 0.5px !important; position: absolute !important; top: 0px !important; left: 0px !important;" viewBox="0 0 64 64"><g><path d="m20,28.12a33.78,33.78 0 0 1 13.36,2.74a22.18,22.18 0 0 1 0.64,5.32c0,9.43 -5.66,17.81 -14,20.94c-8.34,-3.13 -14,-11.51 -14,-20.94a22.2,22.2 0 0 1 0.64,-5.32a33.78,33.78 0 0 1 13.36,-2.74m0,-28.12c-8.82,0 -14,7.36 -14,16.41l0,5.16c2,-1.2 2,-1.49 5,-2.08l0,-3.08c0,-6.21 2.9,-11.41 8.81,-11.41l0.19,0c6.6,0 9,4.77 9,11.41l0,3.08c3,0.58 3,0.88 5,2.08l0,-5.16c0,-9 -5.18,-16.41 -14,-16.41l0,0zm0,22c-6.39,0 -12.77,0.67 -18.47,4a31.6,31.6 0 0 0 -1.53,9.74c0,13.64 8.52,25 20,28.26c11.48,-3.27 20,-14.63 20,-28.26a31.66,31.66 0 0 0 -1.54,-9.77c-5.69,-3.3 -12.08,-4 -18.47,-4l0,0l0.01,0.03z"></path><path d="m21.23,39.5a2.81,2.81 0 0 0 1.77,-2.59a2.94,2.94 0 0 0 -3,-2.93a3,3 0 0 0 -3,3a2.66,2.66 0 0 0 1.77,2.48l-1.77,4.54l6,0l-1.77,-4.5z"></path></g></svg><span id="pwm-inline-icon-badge-16655" style="position: absolute !important; inset: auto auto 0px 7px !important; box-sizing: content-box !important; font-family: monospace !important; font-size: 9px !important; border-radius: 2px !important; color: white !important; background: rgb(112, 185, 52) !important; border: 0.5px solid white !important; width: auto !important; height: 10px !important; min-width: 10px !important; min-height: 0px !important; display: flex !important; align-items: center !important; justify-content: center !important; pointer-events: none !important;">0</span></div></div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Số Lượng </label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="p_inventory" placeholder="Nhập Số Lượng Sản Phẩm" value="{{ old('p_inventory',0) }}">
                <div id="pwm-inline-icon-16655" class="pwm-field-icon" style="position: absolute !important; width: 18px !important; height: 18px !important; min-height: 0px !important; min-width: 0px !important; z-index: 2147483645 !important; box-shadow: none !important; box-sizing: content-box !important; background: none !important; border: none !important; padding: 0px !important; cursor: pointer !important; outline: none !important; margin-top: -60.2033px; margin-left: 391.972px;"><svg style="display: inline-block !important; width: 16px !important; height: 16px !important; fill: rgb(230, 0, 23) !important; margin-top: 0.5px !important; position: absolute !important; top: 0px !important; left: 0px !important;" viewBox="0 0 64 64"><g><path d="m20,28.12a33.78,33.78 0 0 1 13.36,2.74a22.18,22.18 0 0 1 0.64,5.32c0,9.43 -5.66,17.81 -14,20.94c-8.34,-3.13 -14,-11.51 -14,-20.94a22.2,22.2 0 0 1 0.64,-5.32a33.78,33.78 0 0 1 13.36,-2.74m0,-28.12c-8.82,0 -14,7.36 -14,16.41l0,5.16c2,-1.2 2,-1.49 5,-2.08l0,-3.08c0,-6.21 2.9,-11.41 8.81,-11.41l0.19,0c6.6,0 9,4.77 9,11.41l0,3.08c3,0.58 3,0.88 5,2.08l0,-5.16c0,-9 -5.18,-16.41 -14,-16.41l0,0zm0,22c-6.39,0 -12.77,0.67 -18.47,4a31.6,31.6 0 0 0 -1.53,9.74c0,13.64 8.52,25 20,28.26c11.48,-3.27 20,-14.63 20,-28.26a31.66,31.66 0 0 0 -1.54,-9.77c-5.69,-3.3 -12.08,-4 -18.47,-4l0,0l0.01,0.03z"></path><path d="m21.23,39.5a2.81,2.81 0 0 0 1.77,-2.59a2.94,2.94 0 0 0 -3,-2.93a3,3 0 0 0 -3,3a2.66,2.66 0 0 0 1.77,2.48l-1.77,4.54l6,0l-1.77,-4.5z"></path></g></svg><span id="pwm-inline-icon-badge-16655" style="position: absolute !important; inset: auto auto 0px 7px !important; box-sizing: content-box !important; font-family: monospace !important; font-size: 9px !important; border-radius: 2px !important; color: white !important; background: rgb(112, 185, 52) !important; border: 0.5px solid white !important; width: auto !important; height: 10px !important; min-width: 10px !important; min-height: 0px !important; display: flex !important; align-items: center !important; justify-content: center !important; pointer-events: none !important;">0</span></div></div>

               

     </div>
    </div>
   </div>
   <div class="col-lg-6 float-left">
   <div class="card card-default">
        <div class="card-body">

        <div class="form-group">
                    <label for="exampleFormControlSelect12">Giảm Giá (%)</label>
                    <select class="form-control" id="exampleFormControlSelect12" name="p_discount_id">
                    <option value="">0</option>
                    
                    @foreach($discounts as $item)
          
                        <option value="{{$item->id}}" {{old('p_discount_id') == $item->id ? 'selected' : ''}} >{{$item->d_number}}</option>

                    @endforeach
                    
                    </select>
                    
        </div>

        <div class="form-group">
                    <label for="exampleFormControlSelect12">Danh Mục<span style="color:red">*</span></label>
                    <select class="form-control" id="exampleFormControlSelect12" name="p_category_id">
                    <option value="">__Chọn Danh Mục__</option>
                    
                    @foreach($categories as $item)
          
                        <option value="{{$item->id}}" {{old('p_category_id') == $item->id ? 'selected' : ''}} >{{$item->c_name}}</option>

                    @endforeach
                    
                    </select>
                    
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect12">Thương Hiệu</label>
                    <select class="form-control" id="exampleFormControlSelect12" name="p_brand_id">
                    <option value="">__Thương Hiệu__</option>
                    
                    @foreach($brands as $item)
          
                        <option value="{{$item->id}}" {{old('p_brand_id') == $item->id ? 'selected' : ''}} >{{$item->b_name}}</option>

                    @endforeach
                    
                    </select>
                    
                </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Hình Đại Diện</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="p_avatar">
            </div>
        </div>
    </div>
        
   </div>
    <div class="clearfix"></div>
    <div class="col-lg-12 ">
        <div class="card card-default">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mô Tả Ngắn</label>
                    <textarea class="form-control" id="p_description_short" name="p_description_short">{{ old('p_description_short')}}</textarea>
                    <script>
                        CKEDITOR.replace( 'p_description_short',{
                          
                        });
                        
                    </script>
                </div>  
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mô Tả </label>
                    <textarea class="form-control" id="p_description" name="p_description">{{ old('p_description')}}</textarea>
                    <script>
                        CKEDITOR.replace( 'p_description',{
                      
                        });
                        
                    </script>
                </div>  
            </div>   
        </div>  
    </div>
   <div class="col-lg-12">
   <div class="form-footer pt-4 pt-5 mt-4 border-top">
            <button type="submit" class="btn btn-primary btn-default">Submit</button>
            <button type="submit" class="btn btn-secondary btn-default">Cancel</button>
    </div>
   </div>

    </form>
</div>


  

   
@stop