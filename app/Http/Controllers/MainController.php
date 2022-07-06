<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MainController extends Controller
{
    public function index(Request $request){

        //set date if null
        if($request -> datePickerRequest == null){
            $mytime = Carbon::now()->format('Y-m-d');
            $request -> datePickerRequest = $mytime;
        }

        // mengambil data dari table pegawai
        $crew = DB::table('crew as c')
            ->selectRaw("c.*, lh.tanggal as tanggal, lh.dinas as dinas, lh.status as status,

            SUM(if(lh.tiket = ' INBOX/NOSSA ', 1, 0)) as ticket_inbox_nossa")
            ->join('laporan_harian as lh', 'c.perner', '=', 'lh.username')
            ->groupBy('c.perner', 'c.jenis_kelamin', 'c.nama', 'c.jobs', 'lh.tanggal', 'lh.dinas', 'lh.status')
            ->where('lh.tanggal', '=', $request -> datePickerRequest)
            ->get();

        // mengirim data pegawai ke view index
        return view('main',['crew' => $crew, 'request' => $request]);
    }
    public function exit(){
        return view('welcome');
    }
}
