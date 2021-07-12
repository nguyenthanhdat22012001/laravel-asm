@extends('layout.backend')
@section('title','Danh Sách Blog ')
@section('content')

<div class="col-lg-12">
@if ($message = Session::get('update_success'))
            <div class="alert alert-dismissible fade show alert-success" role="alert">
                <strong>{{ $message }}</strong>
            </div>
 @endif
 @if ($message = Session::get('delete_success'))
            <div class="alert alert-dismissible fade show alert-success" role="alert">
                <strong>{{ $message }}</strong>
            </div>
 @endif
            <div class="basic-data-table">
    <div id="basic-data-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Tên</th>
      <th scope="col">Danh Mục Blog</th>
      <th scope="col">Ảnh Đại Diện</th>
      <th scope="col">Ẩn Hiện</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  @foreach($blogs as $item)
    <tr>
      <td>{{$item->bl_name}}</td>
      <td>{{$item->cateBlog_parent->cbl_name ?? '[N/A]'}}</td>
      <td> <img src="{{asset('images/news\/')}}{{$item->bl_avatar}}" alt="" style="width:50px; height:auto"></td>
      <td>{{$item->bl_active == 1 ? 'Hiện' : 'Ẩn' }}</td>
      <td>
      <a type="button" href="{{route('get_backend.blog.edit',$item->id)}}" class="mb-1 btn btn-pill btn-outline-warning"><i class="mdi mdi-grease-pencil"></i></a>
      <a type="button" href="{{route('get_backend.blog.delete',$item->id)}}" class="mb-1 btn btn-pill btn-outline-danger"><i class="mdi mdi-delete"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
        <div class="row justify-content-between bottom-information">
            <div class="dataTables_info" id="basic-data-table_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
            <div class="dataTables_paginate paging_simple_numbers" id="basic-data-table_paginate">
                <ul class="pagination">
                    <li class="paginate_button page-item previous disabled" id="basic-data-table_previous"><a href="#" aria-controls="basic-data-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                    <li class="paginate_button page-item active"><a href="#" aria-controls="basic-data-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                    <li class="paginate_button page-item"><a href="#" aria-controls="basic-data-table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                    <li class="paginate_button page-item"><a href="#" aria-controls="basic-data-table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                    <li class="paginate_button page-item"><a href="#" aria-controls="basic-data-table" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                    <li class="paginate_button page-item"><a href="#" aria-controls="basic-data-table" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                    <li class="paginate_button page-item"><a href="#" aria-controls="basic-data-table" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                    <li class="paginate_button page-item next" id="basic-data-table_next"><a href="#" aria-controls="basic-data-table" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>

</div>

@stop