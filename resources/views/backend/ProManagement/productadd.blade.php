@extends('backend.layout.layout')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Thêm sản phẩm</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Thêmsp</li>
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
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form   method="POST" action="{{route('addProducts')}}" enctype="multipart/form-data">
                        @csrf
                        @if(session('msg'))
                        <div class="alert alert-{{session('status')}}" role="alert">
                            {{session('msg')}}
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Tên sản phẩm</label>
                                <input type="text" name="name"  class="form-control" placeholder=""
                                    aria-describedby="helpId">

                            </div>
                            <div class="form-group">
                                <label for="">Hình</label>
                                <input type="file" name="avatar" class="form-control" placeholder=""
                                aria-describedby="helpId">

                            </div>
                            <div class="form-group">
                                <label for="">Giá</label>
                                <input type="number" name="price"  class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Số lượng</label>
                                <input type="number" name="quantity"  class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Mã loại</label>
                                        <select class="form-control select2bs4" name="idtype" style="width: 100%;">
                                            @foreach ($maloai as $key => $item)
                                                <option value="{{$item->id}}" selected="<?=$key == 0 ? 'selected':''?>">{{$item->type_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Nhà cung cấp</label>
                                        <select class="form-control select2bs4" name="idncc" style="width: 100%;">
                                            @foreach ($ncc as $key => $item)
                                                <option value="{{$item->id}}" selected="<?=$key == 0 ? 'selected':''?>">{{$item->supplier_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Mô tả</label>
                                <input type="text" name="description" class="form-control" placeholder=""
                                    aria-describedby="helpId">
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
                            <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
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
