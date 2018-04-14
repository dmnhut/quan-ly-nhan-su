<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\priceModel;

class priceController extends Controller
{
    public function index()
    {
        $data = priceModel::all();
        $count = count($data);
        for ($i = 0; $i < $count; $i++) {
            $data[$i]['STT'] = $i + 1;
        }
        return view('admin.QuanLyChiPhi.index', compact('data'));
    }

    public function create()
    {
        return view('admin.QuanLyChiPhi.create');
    }

    public function store(Request $request)
    {
        $data = new priceModel();
        $data->cost_id = md5(time());
        $data->cost_name = $request->get('cost_name');
        $data->cost = $request->get('cost');
        $data->type = $request->get('type');
        $data->port = $request->get('port');
        $data->form = $request->get('form');
        $data->save();
        return redirect('price/index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = priceModel::where('cost_id', $id)->first();
        return view('admin.QuanLyChiPhi.edit', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data = priceModel::find($id);
        $data->cost_name = $request->get('cost_name');
        $data->cost = $request->get('cost');
        $data->type = $request->get('type');
        $data->port = $request->get('port');
        $data->form = $request->get('form');
        $data->save();
        return redirect('price/index');
    }

    public function destroy($id)
    {
        priceModel::find($id)->delete();
        return redirect('price/index');
    }
}
