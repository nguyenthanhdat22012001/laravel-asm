@extends('layout.backend')
@section('title','Cập nhật Phương Thức Thanh Toán')
@section('title_form','Cập Nhật Phương Thức Thanh Toán # ')
@section('content')

<div class="col-lg-12">
 
    @include('backend.payment.report')

</div>

<div class="col-lg-6">

  @include('backend.payment.list')

</div>

<div class="col-lg-6">

  @include('backend.payment.form',["route" => route('get_backend.payment.update',$payment->id)])

</div>


@stop