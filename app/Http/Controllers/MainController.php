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

        if($request -> realtimeData == null){
            $request -> realtimeData = 0;
        }

        // mengambil data dari table pegawai seluruh jobs
        $crew = DB::table('crew as c')
            ->selectRaw("TRIM(c.perner) as perner,
            TRIM(c.jenis_kelamin) as jenis_kelamin,
            TRIM(c.nama) as nama,
            TRIM(c.jobs) as jobs,
            TRIM(lh.tanggal) as tanggal,
            UPPER(SUBSTRING_INDEX(REPLACE (TRIM(lh.dinas), ' ', '/'), '/', 1)) as dinas,
            TRIM(lh.status) as status,
            SUM(if(TRIM(lh.tiket) = 'INBOX/NOSSA', 1, 0)) as ticket_inbox_nossa,
            SUM(if(TRIM(lh.tiket) = 'CARING/TIAL', 1, 0)) as caring_tial,
            SUM(if(TRIM(lh.tiket) = 'DRAFT TIKET NOSSA', 1, 0)) as draft_ticket,
            SUM(if(TRIM(lh.tiket) = 'PLASA', 1, 0)) as plasa,
            SUM(if(TRIM(lh.loker_close) = '#logic_resolved', 1, 0)) as logic_resolved,
            SUM(if(TRIM(lh.loker_close) = '#caring_resolved', 1, 0)) as caring_resolved,
            SUM(if(TRIM(lh.loker_close) = '#gamas_resolved', 1, 0)) as gamas_resolved,
            SUM(if(TRIM(lh.case_harian)  = 'CASE > 30 MENIT', 1, 0)) as case_menit,
            SUM(if(TRIM(lh.case_harian)  = 'CASE BY HD/TEKNISI', 1, 0)) as case_by_teknisi,
            CAST(if(MAX(lh.jumlah_tiket_unbind_internet) <>'', MAX(lh.jumlah_tiket_unbind_internet), 0) AS UNSIGNED)  as internet,
            CAST(if(MAX(lh.jumlah_tiket_unbind_iptv) <>'', MAX(lh.jumlah_tiket_unbind_iptv), 0) AS UNSIGNED)  as iptv,
            CAST(if(MAX(lh.jumlah_tiket_unbind_password) <>'', MAX(lh.jumlah_tiket_unbind_password), 0) AS UNSIGNED)  as password")
            ->join('laporan_harian as lh', DB::raw("TRIM(lh.username)"), '=', DB::raw("TRIM(c.perner)"))
            ->groupBy('perner', 'jenis_kelamin', 'nama', 'jobs', 'tanggal', DB::raw("UPPER(SUBSTRING_INDEX(REPLACE (TRIM(lh.dinas), ' ', '/'), '/', 1))"), 'status',)
            ->where('lh.tanggal', '=', $request -> datePickerRequest)
            ->get();

        // mengirim data pegawai ke view index
        return view('main',['crew' => $crew, 'request' => $request]);
    }
    public function exit(){
        return view('welcome');
    }
}
