<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan_harian extends Model
{
    use HasFactory;
    protected $primaryKey = "username";
    protected $fillable = ['trash','nama','dinas','tiket_nossa','no_telp_int',
                        'keluhan','progress','loker_close','case_harian','nilai_kepuasan',
                        'survey','saran','jumlah_tiket_unbind_internet','jumlah_tiket_unbind_iptv','jumlah_tiket_unbind_password' ];

    static function detail_laporan_harian($trash,$nama,$dinas,$tiket_nossa,$no_telp_int,$keluhan,
                                        $progress,$loker_close,$case_harian,$nilai_kepuasan,$survey,$saran,
                                        $jumlah_tiket_unbind_internet,$jumlah_tiket_unbind_iptv,$jumlah_tiket_unbind_password){
        laporan_harian::create([
            "trash" => $trash,
            "nama" => $nama,
            "dinas" => $dinas,
            "tiket_nossa" => $tiket_nossa,
            "no_telp_int" => $no_telp_int,
            "keluhan" => $keluhan,
            "progress" => $progress,
            "loker_close" => $loker_close,
            "case_harian" => $case_harian,
            "nilai_kepuasan" => $nilai_kepuasan,
            "survey" => $survey,
            "saran" => $saran,
            "jumlah_tiket_unbind_internet" => $jumlah_tiket_unbind_internet,
            "jumlah_tiket_unbind_iptv" => $jumlah_tiket_unbind_iptv,
            "jumlah_tiket_unbind_password" => $jumlah_tiket_unbind_password
        ]);
    }
}

