<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>Bảng điều khiển</h3>
        <ul class="nav side-menu">
            <li><a>Quản lý cán bộ <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('CanBo/index')}}">Danh Sách</a></li>
                    <li><a href="{{url('CanBo/create')}}">Thêm mới</a></li>
                </ul>
            </li>
            <li><a>Quản lý bộ môn <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('BoMon/index')}}">Danh sách</a></li>
                    <li><a href="{{url('BoMon/create')}}">Thêm mới</a></li>
                </ul>
            </li>
            <li><a>Quản lý bộ lớp <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('Lop/index')}}">Danh sách</a></li>
                    <li><a href="{{url('Lop/create')}}">Thêm mới</a></li>
                </ul>
            </li>
            <li><a>Quản lý học sinh <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('students.index') }}">Danh sách</a></li>
                    <li><a href="{{ route('students.create') }}">Thêm mới</a></li>
                </ul>
            </li>
            <li><a>Quản lý chi phí <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('chiphi.index') }}">Danh sách</a></li>
                    <li><a href="{{ route('chiphi.create') }}">Thêm mới</a></li>
                </ul>
            </li>
            <li><a>Quản lý cơ sở vật chất <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('CoSoVatChat/index')}}">Danh sách</a></li>
                    <li><a href="{{url('CoSoVatChat/create')}}">Thêm mới</a></li>
                </ul>
            </li>
            <li><a>Quản lý nhóm người dùng <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('NhomNguoiDung/index')}}">Danh sách</a></li>
                    <li><a href="{{url('NhomNguoiDung/create')}}">Thêm mới</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>