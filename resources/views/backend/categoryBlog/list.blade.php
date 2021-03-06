<div class="basic-data-table">
    <div id="basic-data-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Danh Mục Blog</th>
      <th scope="col">Ẩn Hiện</th>
      <th scope="col">Hot</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  @foreach($categoryBlogs as $item)
    <tr>
      <td>{{$item->cbl_name}}</td>
      <td>{{$item->cbl_active == 1 ? 'Hiện' : 'Ẩn' }}</td>
      <td>{{$item->cbl_hot == 1 ? 'Hot' : '[N/A]' }}</td>
      <td>
      <a type="button" href="{{route('get_backend.categoryBlog.edit',$item->id)}}" class="mb-1 btn btn-pill btn-outline-warning"><i class="mdi mdi-grease-pencil"></i></a>
      <a type="button" href="{{route('get_backend.categoryBlog.delete',$item->id)}}" class="mb-1 btn btn-pill btn-outline-danger"><i class="mdi mdi-delete"></i></a>
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
                    <li class="paginate_button page-item next" id="basic-data-table_next"><a href="#" aria-controls="basic-data-table" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>