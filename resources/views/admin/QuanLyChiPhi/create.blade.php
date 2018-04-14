{{ $page = 'Quản Lý Chi Phí' }}
@extends('layouts.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Chi phí
                        <small>Thêm mới</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="   padding-bottom:120px">
                    {{--<form action="{{ route('type.store') }}" method="POST">--}}
                    <form action="{{route('chiphi.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Tên chi phí</label>
                            <input class="form-control" name="cost_name" placeholder="Nhập tên chi phí"
                                   required/>
                        </div>
                        <div class="form-group">
                            <label>Loại chi phí</label>
                            <input class="form-control" name="type" placeholder="Nhập loại chi phí"
                                   required/>
                        </div>
                        <div class="form-group">
                            <label>Chi phí</label>
                            <input class="form-control" name="cost" placeholder="Nhập chi phí"
                                   required/>
                        </div>
                        <div class="form-group">
                            <label>port</label>
                            <input class="form-control" name="port" placeholder="Nhập port"
                                   required/>
                        </div>
                        <div class="form-group">
                            <label>form</label>
                            <input class="form-control" name="form" placeholder="Nhập form"
                                   required/>
                        </div>

                        <button type="submit" class="btn btn-default">Thêm mới</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection