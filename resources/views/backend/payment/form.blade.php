<h4>@yield('title_form') {{$tag->t_name ?? ''}}</h4>
<form action="{{$route}}" method="post" enctype="multipart/form-data">
@csrf
<div class="card card-default">
        <div class="card-body">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tag <span style="color:red">*</span> </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="t_name" placeholder="Nhập Tag" value="{{ old('t_name', $tag->t_name ?? '') }}">
                <div id="pwm-inline-icon-16655" class="pwm-field-icon" style="position: absolute !important; width: 18px !important; height: 18px !important; min-height: 0px !important; min-width: 0px !important; z-index: 2147483645 !important; box-shadow: none !important; box-sizing: content-box !important; background: none !important; border: none !important; padding: 0px !important; cursor: pointer !important; outline: none !important; margin-top: -60.2033px; margin-left: 391.972px;"><svg style="display: inline-block !important; width: 16px !important; height: 16px !important; fill: rgb(230, 0, 23) !important; margin-top: 0.5px !important; position: absolute !important; top: 0px !important; left: 0px !important;" viewBox="0 0 64 64"><g><path d="m20,28.12a33.78,33.78 0 0 1 13.36,2.74a22.18,22.18 0 0 1 0.64,5.32c0,9.43 -5.66,17.81 -14,20.94c-8.34,-3.13 -14,-11.51 -14,-20.94a22.2,22.2 0 0 1 0.64,-5.32a33.78,33.78 0 0 1 13.36,-2.74m0,-28.12c-8.82,0 -14,7.36 -14,16.41l0,5.16c2,-1.2 2,-1.49 5,-2.08l0,-3.08c0,-6.21 2.9,-11.41 8.81,-11.41l0.19,0c6.6,0 9,4.77 9,11.41l0,3.08c3,0.58 3,0.88 5,2.08l0,-5.16c0,-9 -5.18,-16.41 -14,-16.41l0,0zm0,22c-6.39,0 -12.77,0.67 -18.47,4a31.6,31.6 0 0 0 -1.53,9.74c0,13.64 8.52,25 20,28.26c11.48,-3.27 20,-14.63 20,-28.26a31.66,31.66 0 0 0 -1.54,-9.77c-5.69,-3.3 -12.08,-4 -18.47,-4l0,0l0.01,0.03z"></path><path d="m21.23,39.5a2.81,2.81 0 0 0 1.77,-2.59a2.94,2.94 0 0 0 -3,-2.93a3,3 0 0 0 -3,3a2.66,2.66 0 0 0 1.77,2.48l-1.77,4.54l6,0l-1.77,-4.5z"></path></g></svg><span id="pwm-inline-icon-badge-16655" style="position: absolute !important; inset: auto auto 0px 7px !important; box-sizing: content-box !important; font-family: monospace !important; font-size: 9px !important; border-radius: 2px !important; color: white !important; background: rgb(112, 185, 52) !important; border: 0.5px solid white !important; width: auto !important; height: 10px !important; min-width: 10px !important; min-height: 0px !important; display: flex !important; align-items: center !important; justify-content: center !important; pointer-events: none !important;">0</span></div></div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mô Tả</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="t_description">{{ old('t_description', $tag->t_description ?? '')}}</textarea>
                </div>  
           
     </div>
    </div>
    <div class="clearfix"></div>

   <div class="col-lg-12">
   <div class="form-footer pt-4 pt-5 mt-4 border-top clearfix">
            <div class="float-left">
                <button type="submit" class="btn btn-primary btn-default">Submit</button>
                <button type="submit" class="btn btn-secondary btn-default">Cancel</button>
            </div>

            <div class="float-right d-flex">
                 <label class="control control-checkbox checkbox-primary mr-4">Hiện
                 @if(isset($tag))
                    
                    <input type="checkbox" {{ $tag->t_active == 1 ? 'checked' : ''}} name="t_active" value="1">
                  @else
               
                    <input type="checkbox" checked name="t_active" value="1">
                  @endif
                  <div class="control-indicator"></div>
                </label>
                <label class="control control-checkbox checkbox-danger">Hot
                @if(isset($tag))
               
                    <input type="checkbox" {{ $tag->t_hot == 1 ? 'checked' : ''}}  name="t_hot" value="1">
                  @else
                
                  <input type="checkbox" checked name="t_hot" value="1">
                @endif
                  <div class="control-indicator"></div>
                </label>
            </div>
    </div>
   </div>

    </form>