<?php

namespace App\Http\Controllers;

use App\StudentProfileModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentProfileController extends Controller
{
    private $dir = 'QuanLyHocSinh';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = StudentProfileModel::where('status', 1)
            ->orderby('user_name', 'asc');
        $data = $query->paginate(15);
        $json = $query->get();
        $count = count($json);
        for ($index = 0; $index < $count; $index++) {
            $key = $json[$index]['student_id'];
            $json[$index]->gioitinh = ($json[$index]->gender == 1) ? 'Nam' : 'Nữ';
            $json[$key] = $json[$index];
            unset($json[$index]);
            $data[$index]['stt'] = $index + 1;
            $data[$index]['id'] = $data[$index]->student_id;
            $data[$index]['gioitinh'] = $data[$index]->gender == 1 ? 'Nam' : 'Nữ';
        }
        return view('admin.' . $this->dir . '.index', compact('data', 'json'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.' . $this->dir . '.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = collect($request->all())->toArray();
        $data['student_id'] = md5(date('Y-m-d H:i:s G'));
        $data['status'] = 1;
        unset($data['_token']);
        StudentProfileModel::insert($data);
        return redirect(route('students.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentProfileModel $studentProfileModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentProfileModel $studentProfileModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = StudentProfileModel::findorfail($id);
        return view('admin.' . $this->dir . '.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\StudentProfileModel $studentProfileModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = collect($request->all())->toArray();
        unset($data['_method']);
        unset($data['_token']);
        StudentProfileModel::where('student_id', $id)
            ->update($data);
        return redirect(route('students.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentProfileModel $studentProfileModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentProfileModel $studentProfileModel)
    {

    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        $data = StudentProfileModel::findorfail($id);
        $data->status = 0;
        $data->save();
        return redirect(route('students.index'));
    }
}
