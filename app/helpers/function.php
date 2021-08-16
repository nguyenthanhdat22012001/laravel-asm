<?php

if(!function_exists('get_data_user')){
    function get_data_user($guest , $colunm = 'id'){
            return Auth::guard($guest)->user() ? Auth::guard($guest)->user()->$colunm : null;
    }
}

if(!function_exists('pare_url_file')){
    function pare_url_file($image , $folder = ''){
          if(!$image){
              return '/images/no-image.jpg';
          }

          $explode = explode('__',$image);

          if(iseet($explode[0])){
            $time = str_replace('-','/',$explode[0]);
            return "/uploads". $folder ."/". date('Y/m/d', strtotime($time))."/".$image;
          }
    }
}

if(!function_exists('upload_image')){
    function upload_image($file , $folder = '', array $extend = array()){
     $code =1;
     //lay duong dan anh
     $file_base = public_path(). '/uploads/'. $_FILES[$file]['name'];
     //thong tin file
     $info = new splFileInfo($file_base);
     //duoi file
     $ext = strtolower($info->getEtension());
     //kiem tra dinh dang file
     if(!$extend)
         $extend = ['png','jpg','jpeg','webp'];
     if(!in_array($ext,$extend))  
         return $data['code'] =0;
     //ten file moi
     $nameFile = trim(str_replace('.', $ext,'',strtolower($info->getFilename())));
     $filename = date('Y-m-d__').  str::slug($nameFile). '.'. $ext;
     //thu muc goc de upload
     $path = public_path(). '/uploads/'. date('Y/m/d');
     if($folder)
         $path = public_path(). '/uploads/'.$folder .'/'. date('Y/m/d');
     
     if(!File::exists($path))
         mkdir($path , 0777 , true);
     //di chuyen file vao thu muc upload
     move_uploaded_file($_FILES[$file]['tmp_name'], $path.$filename);

     $data = [
         'name' => $filename,
         'code' => $code,
         'path' => $path,
         'path_img' => 'uploads/'.$filename,
     ];
     return $data;
    }
}

if(!function_exists('priceNew')){
function priceNew($priceOld , $discount){
    return  $priceOld - ($priceOld * ($discount / 100)) ;
}
}

if(!function_exists('DateFormatHiddenTime')){
    function DateFormatHiddenTime($date)
    {
        return  date('d/m/Y', strtotime($date)) ;
    }
}

if(!function_exists('textReadmore')){
    function textReadmore($string)
    {
        // strip tags to avoid breaking any html
        $string = strip_tags($string);
        if (strlen($string) > 300) {

            // truncate string
            $stringCut = substr($string, 0, 300);
            $endPoint = strrpos($stringCut, ' ');

            //if the string doesn't contain any space then it will cut without word basis.
            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
            $string .= '...';
        }
        return $string;
    }
}

?>