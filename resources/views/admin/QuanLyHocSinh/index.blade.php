{{ $page = 'Quản Lý Học Sinh' }}
@extends('layouts.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{ $page }} :
                        <small>Danh Sách</small>
                    </h1>
                </div>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Họ Tên</th>
                        <th>Giới Tính</th>
                        <th>Ngày Sinh</th>
                        <th>Chi Tiết</th>
                        <th>Chỉnh Sửa</th>
                        <th>Xóa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $val)
                        <tr class="even gradeC" align="center">
                            <td>{{ $val->stt }}</td>
                            <td>{{ $val->user_name }}</td>
                            <td>{{ $val->gioitinh }}</td>
                            <td>{{ $val->birthday }}</td>
                            <td class="center">
                                <a id="{{ $val->id }}" class="show"><i class="fa fa fa-info-circle"></i></a>
                            </td>
                            <td class="center"><a href="{{ route('students.edit', [$val->id]) }}"><i
                                            class="fa fa-pencil fa-fw"></i></a></td>
                            <td class="center"><a href="{{ route('students.delete', [$val->id]) }}"><i
                                            class="fa fa-trash-o  fa-fw"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>
@endsection
<div id="mdl-show" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 id="h4-username" class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <table class="table table-condensed table-hover">
                    <tbody id="detail">

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@section('script')
    <script>
        let json = @json($json);
        console.clear();
        $(document).ready(() => {
            $(".show").on('click', function () {
                let data = json[$(this).attr('id')];
                let html;
                console.log(data);
            html = `
                    <tr>
                        <td>Giới Tính</td>
                        <td>${data.gioitinh}</td>
                    </tr>
                    <tr>
                        <td>Ngày Sinh</td>
                        <td>${data.birthday}</td>
                    </tr>
                    <tr>
                        <td>Nơi Sinh</td>
                        <td>${data.place_birth}</td>
                    </tr>
                    <tr>
                        <td>Địa Chỉ Hiện Tại</td>
                        <td>${data.address}</td>
                    </tr>
                    <tr>
                        <td>Địa Chỉ Thường Trú</td>
                        <td>${data.permanent_address}</td>
                    </tr>
                    <tr>
                        <td>Nơi Sinh</td>
                        <td>${data.home_town}</td>
                    </tr>
                    <tr>
                        <td>Họ Tên Cha</td>
                        <td>${data.dad_name}</td>
                    </tr>
                    <tr>
                        <td>Nghề Nghiệp Cha</td>
                        <td>${data.dad_job}</td>
                    </tr>
                    <tr>
                        <td>SĐT Cha</td>
                        <td>${data.dad_phone}</td>
                    </tr>
                    <tr>
                        <td>Họ Tên Mẹ</td>
                        <td>${data.mom_name}</td>
                    </tr>
                    <tr>
                        <td>Nghề Nghiệp Mẹ</td>
                        <td>${data.mom_job}</td>
                    </tr>
                    <tr>
                        <td>SĐT Mẹ</td>
                        <td>${data.mom_phone}</td>
                    </tr>

                `;
                $("#mdl-show").modal()
                $("#h4-username").html(`Thông Tin Của Học Sinh: ${data.user_name}`);
                $("#detail").html(html);
            })
        });
    </script>
@endsection