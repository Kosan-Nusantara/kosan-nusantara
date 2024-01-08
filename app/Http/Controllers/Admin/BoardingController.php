<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Boarding;
use App\Models\Facility;
use Illuminate\Http\Request;

class BoardingController extends Controller
{
    public function index()
    {
        return view('app.admin.boarding.index');
    }
    public function datatable()
    {
        $data = Boarding::all(); // Gantilah dengan model dan query yang sesuai

        return response()->json(['data' => $data]);
    }
    public function create()
    {
        $facilities = Facility::all();
        return view('app.admin.boarding.form', compact(['facilities']));
    }

    public function store(Request $request)
    {
        $request->all();
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // dd($request);
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $imagePath = $request->file('image')->storeAs('images/boarding', $imageName);
        } else {
            $imageName = null;
        }

        // Simpan path gambar ke database
        Boarding::create([
            'name' => $request->name,
            'description' => $request->name,
            'photo' => $imageName,
        ]);

        return redirect()->route('admin.boarding.index')->with('success', 'Berhasil Menambahkan Fasilitas');
    }

    public function edit($id)
    {
        $data = Boarding::where('id', $id)->first();
        return view('app.admin.boarding.edit', compact(['data']));
    }
    public function destroy($id)
    {
        $data = Boarding::find($id);
        $data->delete();
        return redirect()->route('admin.boarding.index')->with('success', 'Berhasil Menghapus Fasilitas');
    }
}