@extends('layout.backend')
@section('title','Danh Sách Thương Hiệu')
@section('title_form','Thêm Thương Hiệu')
@section('content')

<div class="col-lg-12">

  @include('backend.brand.report')

</div>

<div class="col-lg-6">

  @include('backend.brand.list')

</div>

<div class="col-lg-6">

  @include('backend.brand.form',["route" => route('get_backend.brand.store')])

</div>


@stop