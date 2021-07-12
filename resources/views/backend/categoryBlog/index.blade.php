@extends('layout.backend')
@section('title','Danh Mục Blog')
@section('title_form','Thêm Mới Danh Mục Blog')
@section('content')

<div class="col-lg-12">

  @include('backend.categoryBlog.report')

</div>

<div class="col-lg-6">

  @include('backend.categoryBlog.list')

</div>

<div class="col-lg-6">

  @include('backend.categoryBlog.form',["route" => route('get_backend.categoryBlog.store')])

</div>


@stop