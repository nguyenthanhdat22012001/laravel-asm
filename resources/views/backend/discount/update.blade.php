@extends('layout.backend')
@section('title','Cập nhật Bảng Giảm Giá')
@section('title_form','Cập Nhật Bảng Giảm Giá # ')
@section('content')

<div class="col-lg-12">
 
    @include('backend.discount.report')

</div>

<div class="col-lg-6">

  @include('backend.discount.list')

</div>

<div class="col-lg-6">

  @include('backend.discount.form',["route" => route('get_backend.discount.update',$discount->id)])

</div>


@stop