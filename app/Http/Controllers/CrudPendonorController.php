<?php

namespace App\Http\Controllers;

use App\Exports\PendonorExport;
use App\Imports\PendonorImport;
use App\Models\Pendonor;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Eloquent\Model;

class CrudPendonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendonors = Pendonor::all(); //Upload::all() memanggil seluruh data yang ada dalam model tersebut
        return view('pendonor.home', compact(['pendonors']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendonor.creatependonor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pendonor::create($request->all());
        return  redirect('/home');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendonors = Pendonor::find($id);
        return view('pendonor.editpendonor', compact(['pendonors']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pendonors = Pendonor::find($id);
        $pendonors->update($request->all());
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendonors = Pendonor::find($id);
        $pendonors->delete();
        return redirect('/home');
    }
    public function import(Request $request)
    {
        $data = $request->file('file');

        $namafile = $data->getClientOriginalName();
        $data->move('PendonorData', $namafile);

        Excel::import(new PendonorImport, \public_path('/PendonorData/'.$namafile));

        return redirect()->back();
    }

    public function export()
    {
        return Excel::download(new PendonorExport, 'pendonor.xlsx');
    }
    
}