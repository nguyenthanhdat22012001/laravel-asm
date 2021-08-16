<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\rating_Comment;
use App\Models\User;

class rating_CommnentController extends Controller
{
    protected $folder = 'frontend.product.';

    public function postRatingComment(Request $request){
        $data = $request->except(['_tokent']);
        if($data['rc_stars'] == 0){
          $data['rc_stars'] = NULL;
        }
        rating_Comment::create($data);
        $ratingComment = rating_Comment::with('fk_userRatingComment:id,name,avatar,google_id')
        ->orderByDesc('created_at')
        ->where('rc_p_id',$data['rc_p_id'])->get();
          $viewData = [
           'ratingComment' => $ratingComment,
       ];
        return view($this->folder.'listComment',$viewData);
          // return response()->json([
        //     'success'=>'Ajax request submitted successfully',
        // ]);
    }
}
