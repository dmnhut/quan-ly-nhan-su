{{ $page = 'Quản Lý Học Sinh' }}
@extends('layouts.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-header">Cập Nhật Học Sinh
                    </h3>
                </div>
            </div>
            <form action="{{route('students.update', $data->student_id)}}" method="POST">
                @method('PUT')
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-6">
                        <div style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Thông Tin Học Sinh</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Họ Tên</label>
                                        <input type="text" class="form-control" name="user_name"
                                               value="{{ $data->user_name }}"
                                               placeholder="Nhập Vào Họ Tên Học Sinh" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Ngày Sinh</label>
                                        <input type="date" class="form-control" name="birthday"
                                               value="{{ $data->birthday }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Giới Tính</label>
                                        <br>
                                        @if($data->gender == 1)
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" value="1" checked>Nam
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" value="0">Nữ
                                            </label>
                                        @else
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" value="1">Nam
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" value="0" checked>Nữ
                                            </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary"
                                        style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;">Lưu
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Địa Chỉ Liên Lạc</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Địa Chỉ Hiện Tại</label>
                                        <input type="text" class="form-control" name="address"
                                               value="{{ $data->address }}"
                                               placeholder="Nhập Vào Địa Chỉ Hiện Tại">
                                    </div>
                                    <div class="form-group">
                                        <label>Nơi Sinh</label>
                                        <input type="text" class="form-control" name="place_birth"
                                               value="{{ $data->place_birth }}"
                                               placeholder="Nhập Vào Nơi Sinh">
                                    </div>
                                    <div class="form-group">
                                        <label>Quê Quán</label>
                                        <input type="text" class="form-control" name="home_town"
                                               value="{{ $data->home_town }}"
                                               placeholder="Nhập Vào Quê Quán">
                                    </div>
                                    <div class="form-group">
                                        <label>Địa Chỉ Thường Trú</label>
                                        <input type="text" class="form-control" name="permanent_address"
                                               value="{{ $data->permanent_address }}"
                                               placeholder="Nhập Vào Địa Chỉ Thường Trú">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Thông Tin Cha</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Họ Tên Cha</label>
                                        <input type="text" class="form-control" name="dad_name"
                                               value="{{ $data->dad_name }}"
                                               placeholder="Nhập Vào Họ Tên Cha">
                                    </div>
                                    <div class="form-group">
                                        <label>Nghề Nghiệp</label>
                                        <input type="text" class="form-control" name="dad_job"
                                               value="{{ $data->dad_job }}"
                                               placeholder="Nhập Vào Nghề Nghiệp Cha">
                                    </div>
                                    <div class="form-group">
                                        <label>Số Điện Thoại</label>
                                        <input type="text" class="form-control" name="dad_phone"
                                               value="{{ $data->dad_phone }}"
                                               placeholder="Nhập Vào Số Điện Thoại Cha">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Thông Tin Mẹ</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Họ Tên Mẹ</label>
                                        <input type="text" class="form-control" name="mom_name"
                                               value="{{ $data->mom_name }}"
                                               placeholder="Nhập Vào Họ Tên Cha">
                                    </div>
                                    <div class="form-group">
                                        <label>Nghề Nghiệp</label>
                                        <input type="text" class="form-control" name="mom_job"
                                               value="{{ $data->mom_job }}"
                                               placeholder="Nhập Vào Nghề Nghiệp Mẹ">
                                    </div>
                                    <div class="form-group">
                                        <label>Số Điện Thoại</label>
                                        <input type="text" class="form-control" name="mom_phone"
                                               value="{{ $data->mom_phone }}"
                                               placeholder="Nhập Vào Số Điện Thoại Mẹ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection