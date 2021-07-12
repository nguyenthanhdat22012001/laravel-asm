@extends('layout.backend')
@section('title','Cập nhật Tag')
@section('title_form','Cập Nhật Tag # ')
@section('content')

<div class="col-lg-12">
 
    @include('backend.tag.report')

</div>

<div class="col-lg-6">

  @include('backend.tag.list')

</div>

<div class="col-lg-6">

  @include('backend.tag.form',["route" => route('get_backend.tag.update',$tag->id)])

</div>


@stop