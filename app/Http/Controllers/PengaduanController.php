<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index(){

        $pengaduan = Pengaduan::latest()->get();

        $data = [
            "pengaduan" => $pengaduan
        ];

        return view("dashboard/pengaduan/index", $data);
    }

    public function proses_tambah(Request $request){

        // dd($request->all());

        $validated = $request->validate([
            "nama" => "required",
            "no_telp" => "required",
            "alamat" => "required",
            "pesan" => "required",
        ]);

        Pengaduan::create($validated);

        return redirect('/')->with("sukses", "Berhasil Memberikan Pesan Pengaduan");
    }

    public function hapus($id){
        $pengaduan = Pengaduan::find($id);
        $pengaduan->delete();
        return redirect()->back()->with("sukses", "Pengaduan Berhasil Dihapus");
    }
}
