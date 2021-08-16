@extends('layout.backend')
@section('title','Cập nhật Khuyến Mãi')
@section('title_form','Cập Nhật Khuyến Mãi # ')
@section('content')

<div class="col-lg-12">
 
    @include('backend.promotion.report')

</div>

<div class="col-lg-6">

  @include('backend.promotion.list')

</div>

<div class="col-lg-6">

  @include('backend.promotion.form',["route" => route('get_backend.promotion.update',$promotion->id)])

</div>


@stop