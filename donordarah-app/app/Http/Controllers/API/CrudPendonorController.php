<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CrudPendonorResource;
use App\Models\Pendonor;
use Illuminate\Http\Request;


class CrudPendonorController extends Controller
{
    public function index()
    {
        $pendonor = Pendonor::all();
        return response()->json($pendonor);
        // return CrudPendonorResource::collection(Pendonor::all());
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_user' => '',
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'goldarah' => 'required',
        ]);
        $pendonor = Pendonor::create([
            'pendonors' => $request->pendonor,
        ]);

        $response = [
            'message' => 'Data Berhasil Ditambahkan',
            'data' => new CrudPendonorResource($pendonor),
        ];

        return response()->json($response, 201);
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

        // $this->validate($request, [
        //     'pendonor' => 'required',
        // ]);

        try {
            $pendonor = Pendonor::findOrFail($id);
            $pendonor->update($request->all());
            return response()->json([
                'message' => 'Data Berhasil Diperbarui',
                'data' => $pendonor
            ], 200);
        } catch (\Throwable $th) {
            return response([
                'message' => 'Error ' . $th,
            ]);
        }
    }

    public function destroy($id)
    {
        $pendonor = Pendonor::findOrFail($id);

        try {
            $pendonor->delete();
            return response()->json(['message' => 'Data Berhasil Dihapus'], 200);
        } catch (\Throwable $th) {
            return response([
                'message' => 'Error ' . $th,
            ]);
        }
    }
}
