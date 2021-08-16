

@empty(!$ratingComment)
@foreach($ratingComment as $item)
@php
    if($item->fk_userRatingComment->google_id){
        $avatar = $item->fk_userRatingComment->avatar;
    }else
    if($item->fk_userRatingComment->avatar == null){
        $avatar = url('images/account\no-user.png').'';
    }
    else{
        $avatar  = url('images/account\/')."".$item->fk_userRatingComment->avatar;
    }
@endphp
<div class="panel-body">

<div class="col-md-4 imageUserComment">
    <div class="pull-left" style="margin-right:10px">
    <img  src="{{  $avatar }}" alt="">
    </div>
    <div class="pull-left meta">
        <div class="title h6">
            @if(Auth::check())
            <a ><b>{{ Auth::user()->id == $item->fk_userRatingComment->id ? 'Bạn' : $item->fk_userRatingComment->name }}</b></a>
            @else
            <a ><b>{{ $item->fk_userRatingComment->name }}</b></a>
            @endif
        </div>
        <h6 class="text-muted time"><small>{{ date('d/m/Y', strtotime($item->created_at)) }}</small></h6>
        @if($item->rc_stars != NULL)   
            <p class="rating-star pull-left">
                @for($i=0; $i < $item->rc_stars ; $i++)
                    <i class="fa fa-star"></i>
                @endfor
            </p>
        @endif
    </div>
</div>

<div class="post-description col-md-8"> 
    <p>{{ $item->rc_comment }}</p>

</div>
@can('isAdmin')
<div class="pull-right meta">
    <div class="title h6">
        <button>xóa</button>
        <button>sửa</button>
    </div>
</div>
    
@endcan
   
</div> 
@endforeach
@endempty