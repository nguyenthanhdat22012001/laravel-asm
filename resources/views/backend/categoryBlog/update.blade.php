@extends('layout.backend')
@section('title','Cập nhật Danh Mục Blog')
@section('title_form','Cập Nhật Danh Mục Blog # ')
@section('content')

<div class="col-lg-12">
 
    @include('backend.categoryBlog.report')

</div>

<div class="col-lg-6">

  @include('backend.categoryBlog.list')

</div>

<div class="col-lg-6">

  @include('backend.categoryBlog.form',["route" => route('get_backend.categoryBlog.update',$categoryBlog->id)])

</div>


@stop