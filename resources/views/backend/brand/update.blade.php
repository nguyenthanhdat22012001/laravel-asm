@extends('layout.backend')
@section('title','Cập nhật Thương Hệu')
@section('title_form','Cập Nhật Bảng Thương Hiệu # ')
@section('content')

<div class="col-lg-12">
 
    @include('backend.brand.report')

</div>

<div class="col-lg-6">

  @include('backend.brand.list')

</div>

<div class="col-lg-6">

  @include('backend.brand.form',["route" => route('get_backend.brand.update',$brand->id)])

</div>


@stop