<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FacilityController extends Controller
{
    public function index()
    {
        return view('app.admin.facility.index');
    }
    public function datatable()
    {
        $data = Facility::all(); // Gantilah dengan model dan query yang sesuai

        return response()->json(['data' => $data]);
    }
    public function create()
    {
        return view('app.admin.facility.form');
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
            $imagePath = $request->file('image')->storeAs('images/facility', $imageName);
        } else {
            $imageName = null;
        }

        // Simpan path gambar ke database
        Facility::create([
            'name' => $request->name,
            'description' => $request->name,
            'photo' => $imageName,
        ]);

        return redirect()->route('admin.facility.index')->with('success', 'Berhasil Menambahkan Fasilitas');
    }

    public function edit($id)
    {
        $data = Facility::where('id', $id)->first();
        return view('app.admin.facility.edit', compact(['data']));
    }
    public function destroy($id)
    {
        $data = Facility::find($id);
        $data->delete();
        return redirect()->route('admin.facility.index')->with('success', 'Berhasil Menghapus Fasilitas');
    }
}