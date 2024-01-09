<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Boarding;
use App\Models\BoardingFacility;
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
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'facilities' => 'nullable|array',
            // 'facilities.*' => 'exists:facilities,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // dd($request);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $imagePath = $request->file('image')->storeAs('images/boarding', $imageName);
        } else {
            $imageName = null;
        }

        // Simpan path gambar ke database
        $boarding = Boarding::create([
            'name' => $request->name,
            'description' => $request->name,
            'photo' => $imageName,
        ]);

        // dd($request, $boarding);

        if ($request->has('facilities')) {
            foreach ($request->input('facilities') as $facilityId) {
                // $boarding->facilities()->attach($facilityId);
                BoardingFacility::create([
                    'boarding_id' => $boarding->id,
                    'facility_id' => $facilityId,
                ]);
            }
        }


        return redirect()->route('admin.boarding.index')->with('success', 'Berhasil Menambahkan Fasilitas');
    }

    public function edit($id)
    {
        $boarding = Boarding::findOrFail($id);
        $facilities = Facility::all();
        $boardingFacilities = $boarding->facilities->pluck('id')->toArray();

        return view('app.admin.boarding.edit', compact('boarding', 'facilities', 'boardingFacilities'));
    }
    public function destroy(Request $request)
    {
        $boardingId = $request->input('id');

        try {
            $boarding = Boarding::findOrFail($boardingId);
            $boarding->delete();
            BoardingFacility::where('boarding_id', $boardingId)->delete();

            return response()->json(['success' => true, 'message' => 'Fasilitas berhasil dihapus.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan saat menghapus fasilitas.']);
        }
    }
}
