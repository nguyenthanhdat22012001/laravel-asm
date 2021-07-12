@extends('layout.backend')
@section('title','Danh Sách Tag')
@section('title_form','Thêm Mới Tag')
@section('content')

<div class="col-lg-12">

  @include('backend.tag.report')

</div>

<div class="col-lg-6">

  @include('backend.tag.list')

</div>

<div class="col-lg-6">

  @include('backend.tag.form',["route" => route('get_backend.tag.store')])

</div>


@stop