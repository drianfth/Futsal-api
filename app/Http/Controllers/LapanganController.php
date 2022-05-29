<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class LapanganController extends Controller
{
    //
    public function index()
    {
        $data = Lapangan::all();
        return response()->json([
            'message' => 'success',
            'data' => $data
        ]);
    }

    public function show(Lapangan $lapangan)
    {
        $data = Lapangan::all();
        return response()->json([
            'message' => 'success',
            'data' => $lapangan
        ]);
    }



    public function store(Request $request)
    {
        $lapangan = Lapangan::create($request->all());
        return response()->json([
            'message' => 'success',
            'data' => $lapangan
        ]);
    }
}
