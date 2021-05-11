 <!-- Sidebar user panel (optional) -->
 <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="<?=Auth::user()->User_avatar?asset(Auth::user()->User_avatar):asset('upload/no-image.png')?>" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">{{Auth::user()->name}}</a>
    </div>
  </div>
  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item ">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
           QL sản phẩm
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('addProduct')}}" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Thêm</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('product')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh sách</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item ">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
           QL quản trị
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('addUser')}}" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Thêm</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('User')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh sách</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item ">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
           QL loại
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('addType')}}" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Thêm</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('ProductType')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh sách</p>
            </a>
          </li>
        </ul>
      </li>

    </ul>
  </nav>
  <!-- /.sidebar-menu -->
