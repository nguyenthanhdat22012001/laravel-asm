@extends('layout.backend')
@section('title','Cập nhật Danh mục con')
@section('title_form','Cập Nhật Danh Mục Con # ')
@section('content')

<div class="col-lg-12">
 
    @include('backend.categoryChild.report')

</div>

<div class="col-lg-6">

  @include('backend.categoryChild.list')

</div>

<div class="col-lg-6">

  @include('backend.categoryChild.form',["route" => route('get_backend.categoryChild.update',$categoryChild->id)])

</div>


@stop