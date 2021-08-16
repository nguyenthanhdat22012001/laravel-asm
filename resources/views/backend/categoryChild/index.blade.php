@extends('layout.backend')
@section('title','Danh Sách Tag')
@section('title_form','Thêm Mới Tag')
@section('content')

<div class="col-lg-12">

  @include('backend.categoryChild.report')

</div>

<div class="col-lg-6">

  @include('backend.categoryChild.list')

</div>

<div class="col-lg-6">

  @include('backend.categoryChild.form',["route" => route('get_backend.categoryChild.store')])

</div>


@stop