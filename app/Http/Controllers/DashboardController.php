<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function getTotalKunjungan()
    {

        $kunjungans = \App\Models\Kunjungan::all();
        $total = $kunjungans->count();

        // return to json
        return response()->json(['total' => $total], 200);
    }

    public function getKunjunganHarian()
    {

        //    get sum of kunjungan by day

        $tanggalSekarang = Carbon::now()->toDateString();
        $kunjunganHariIni = \App\Models\Kunjungan::whereDate('tanggal', $tanggalSekarang)->count();

        return response()->json(['kunjunganHariIni' => $kunjunganHariIni], 200);
    }

    public function getKunjunganBulanan()
    {

        $kunjunganBulananIni = \App\Models\Kunjungan::whereYear('tanggal', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->count();

        return response()->json(['kunjunganBulananIni' => $kunjunganBulananIni], 200);
    }

    public function getKunjunganTahunan()
    {

        $kunjunganTahunIni = \App\Models\Kunjungan::whereYear('tanggal', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->year())
            ->count();

        return response()->json(['kunjunganTahunIni' => $kunjunganTahunIni], 200);
    }

    public function getTotalTamuPerBulan()
    {
        $totalTamuPerHari = \App\Models\Kunjungan::selectRaw('DATE_FORMAT(tanggal, "%Y-%m-%d") as tanggal, count(*) as total')
        ->groupBy('tanggal')
        ->get();

        return response()->json(['total_tamu_perbulan' => $totalTamuPerHari]);
    }
}
