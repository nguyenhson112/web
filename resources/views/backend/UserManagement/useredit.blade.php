{{-- {{dd($dsnhom)}} --}}
{{-- {{dd($listUser)}} --}}
@extends('backend.layout.layout')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Sửa thông tin</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Sửatt</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form</h3>
                    </div>
                    @if (session('msg'))
                    <div class="alert alert-{{session('status')}}" role="alert">
                        {{session('msg')}}
                    </div>

                    @endif

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Họ Tên</label>
                                <input type="text" name="name" class="form-control" value="{{$listUser['name']}}"
                                    aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Tên đăng nhập</label>
                                <input readonly type="text" name="email" class="form-control"
                                    value="{{$listUser['email']}}" aria-describedby="helpId">

                            </div>
                            <div class="form-group">
                                <label for="">Hình đại diện</label>
                                <input type="file" name="avatar" class="form-control" placeholder=""
                                    aria-describedby="helpId">

                            </div>
                            <div class="form-group">
                                <label for="">Mật khẩu</label>
                                <input type="password" name="password" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label>Mã nhóm</label>
                                <select class="form-control select2bs4" name="manhom" style="width: 100%;">

                                    @foreach ($dsnhom as $key => $item)

                                    <option value="{{$item->id}}" selected="<?=$key == 1 ? 'selected':''?>">
                                        {{$item->group_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Trạng thái</label>
                                <select name="trangthai" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                                    <option value="">Chọn trạng thái</option>
                                    <option <?=isset($trangthai) && $trangthai->status==0?'selected':''?> value="0">Khóa
                                    </option>
                                    <option <?=isset($trangthai) &&  $trangthai->status==1?'selected':''?> value="1">
                                        Kích hoạt
                                    </option>
                                    {{-- @foreach ($trangthai as $key => $item)
                                    <option <?=isset($trangthai) && $item->status==0 && $key == 0?'selected':''?> value="0">Khóa
                                    </option>
                                    <option <?=isset($trangthai) &&  $item->status==1 && $key == 0?'selected':''?> value="1">
                                        Kích hoạt
                                    </option>
                                    @endforeach --}}


                                </select>
                            </div>

                            {{-- <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                    <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                  </div>
                </div> --}}
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Sửa thông tin</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
@section('script')
<script>
    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })

</script>
@endsection
