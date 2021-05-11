@extends('backend.layout.layout')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Danh sách quản trị</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">DS quản trị</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with minimal features & hover style</h3>
                    </div>
                    @if (session('msg'))
                    <div class="alert alert-{{session('status')}}" role="alert">
                        {{session('msg')}}
                    </div>
                    @endif
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Hình</th>
                                    <th>Tên</th>
                                    <th>Tên đăng nhập</th>
                                    <th>Nhóm</th>
                                    <th>Trạng thái</th>
                                    <th>Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listUser as $item)
                                <tr>
                                    <td><img width="50px"
                                            src="<?=$item->User_avatar?asset($item->User_avatar):asset('upload/no-image.png')?>" />
                                    </td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->group_code}}</td>
                                    <td>
                                        <input type="checkbox" name="my-checkbox"
                                            <?= $item->trangthai == 1?"checked":""  ?> data-bootstrap-switch
                                            data-off-color="danger" data-on-color="success">
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-primary" href="{{route('editUser',$item->id)}}"
                                            role="button">
                                            <i class="fa fa-wrench" style="color:red" aria-hidden="true"></i>
                                            Sửa</a>
                                        <a onclick="return confirm('Bạn muốn xóa?')" class="btn btn-sm btn-danger"
                                            href="{{route('deleteUser',$item->id)}}" role="button">
                                            <i class="fa fa-trash" style="color:blue" aria-hidden="true"></i>
                                            Xóa</a>
                                        {{-- <form action="{{route('deleteUser',$item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Bạn muốn xóa?')" class="btn btn-sm btn-danger"
                                            href="#" role="button" type="submit">
                                            <i class="fa fa-trash" style="color:blue" aria-hidden="true"></i>
                                            Xóa</button>
                                        </form> --}}



                                    </td>
                                </tr>
                                @endforeach

                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection
@section('script')
<script>
    $(function () {
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
      $('#example2').on('page.dt', function () {
        setTimeout(() => {
            $("input[data-bootstrap-switch]").each(function(){
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })
        }, 100);
      });
      $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

    });
</script>
@endsection
