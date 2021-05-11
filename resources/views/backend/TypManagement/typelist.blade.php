@extends('backend.layout.layout')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Danh sách loại </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">DS sản loại</li>
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
                                    <th>Tên</th>
                                    <th>Hình</th>
                                    <th>Trạng thái</th>
                                    <th>Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listProductType as $item)
                                <tr>
                                    <td>{{$item->type_name}}</td>
                                    <td><img width="50px"
                                            src="<?=$item->type_avatar?asset($item->type_avatar):asset('upload/no-image.png')?>" />
                                    </td>
                                    <td>
                                        <input type="checkbox" name="my-checkbox"
                                            <?= $item->status == 1?"checked":""  ?> data-bootstrap-switch
                                            data-off-color="danger" data-on-color="success">

                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-primary" href="{{route('editType',$item->id)}}"
                                            role="button">
                                            <i class="fa fa-wrench" style="color:red" aria-hidden="true"></i> Sửa</a>
                                        <a onclick="return confirm('Bạn muốn xóa?')" class="btn btn-sm btn-danger"
                                            href="{{route('deleteType',$item->id)}}" role="button">
                                            <i class="fa fa-trash" style="color:blue" aria-hidden="true"></i> Xoá</a>
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
