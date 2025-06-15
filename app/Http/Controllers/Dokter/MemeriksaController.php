<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// TAMBAHKAN USE STATEMENT YANG BENAR DI SINI
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\JadwalPeriksa;
use App\Models\Periksa;

class MemeriksaController extends Controller
{
    public function index()
    {
        //cari jadwal periksa dokter yang sedang aktif
        $jadwalPeriksas = JadwalPeriksa::where('id_dokter', Auth::user()->id)
            ->where('status', true)
            ->first();

        //dapatkan daftar janji periksa yang terkait dengan jadwal periksa yang aktif
        $janjiPeriksas = JanjiPeriksa::where('id_jadwal_periksa', $JadwalPeriksas->id)->get();

        return view('dokter.memeriksa.index')->with([
            'janjiPeriksas' => $janjiPeriksas,
        ]);
    }

    public function periksa($id)
    {
        $janjiPeriksa = JanjiPeriksa::findOrFail($id);

        return view('dokter.memeriksa.periksa')->with([
            'janjiPeriksa' => $janjiPeriksa,
        ]);
    }

    public function edit()
    {
        return view('dokter.memeriksa.edit');
    }
}
