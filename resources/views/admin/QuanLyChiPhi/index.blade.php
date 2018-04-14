{{ $page = 'Quản Lý Chi Phí' }}
@extends('layouts.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Chi phí
                        <small>Danh sách</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên chi phí</th>
                        <th>Chi phí</th>
                        <th>Loại chi phí</th>
                        <th>port</th>
                        <th>form</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $key=>$value):?>
                    <tr class="odd gradeX" align="center">
                        <td>{{$value->STT}}</td>
                        <td>{{$value->cost_name}}</td>
                        <td>{{$value->cost}}</td>
                        <td>{{$value->type}}</td>
                        <td>{{$value->port}}</td>
                        <td>{{$value->form}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a
                                    href="{{route('chiphi.destroy',[$value->cost_id])}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                    href="{{route('chiphi.edit',[$value->cost_id])}}">Edit</a></td>
                    </tr>
                    <?php endforeach?>
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection