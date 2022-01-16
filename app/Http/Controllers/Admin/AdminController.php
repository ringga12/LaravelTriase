<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Charts\JenisBencanaAlam;

use App\Models\User;
use App\Models\CourseStatus;
use App\Models\Level;

class AdminController extends Controller
{
    public function index()
    {
        // Jenis Bencana
        $progress  = CourseStatus::all();
        $gempa     = $progress->where('course_id', 1)
        ->where('progress', true)->count();

        $banjir     = $progress->where('course_id', 2)
         ->where('progress', true)->count();

        $kebakaran  = $progress->where('course_id', 3)
        ->where('progress', true)->count();

        // Jumlah Pendaftar
        $bulan        = date("m") - 1;
        $start_date   = date("Y-" . $bulan . "-t");
        $end_date     = date("Y-" . "m" . "-08");

        $minggu_pertama = User::whereBetween('created_at', [$start_date, $end_date])->count();
        $minggu_dua     = User::whereBetween('created_at', [$end_date, date('Y-m-d', strtotime($end_date. ' + 8 days'))])->count();
        $minggu_tiga    = User::whereBetween('created_at', [date('Y-m-d', strtotime($end_date. ' + 8 days')), 
                                                            date('Y-m-d', strtotime($end_date. ' + 16 days'))])->count();
        $minggu_empat   = User::whereBetween('created_at', [date('Y-m-d', strtotime($end_date. ' + 16 days')), 
                                                            date('Y-m-d', strtotime($end_date. ' + 24 days'))])->count();

        // Level Pengguna
        $level          = Level::all();
        $newbie         = $level->where('level', 'newbie')->count();
        $intermediate   = $level->where('level', 'intermediate')->count();
        $senior         = $level->where('level', 'senior')->count();
        $master         = $level->where('level', 'master')->count();

        // Badges
        $perfect_man    = $level->where('perfect_man', true)->count();
        $top_global     = $level->where('top_global', true)->count();
        // $win_streak     = $level->where('win_streak', true)->count();
        // $fast_learner   = $level->where('fast_learner', true)->count();
        // $master         = $level->where('master', true)->count();


        // CHART
        $jenis_bencana  = new JenisBencanaAlam;
        $jenis_bencana->labels(['Gempa Bumi', 'Banjir', 'Kebakaran', 'Longsor',
                        'Gunung Meletus', 'Tsunami', 'Badai', 'Puting Beliung']);
        $jenis_bencana->dataset('Jumlah', 'horizontalBar', [$gempa, $banjir, $kebakaran])->color('#6D9EEB')->backgroundColor('#6D9EEB');

        $jumlah_pendaftar  = new JenisBencanaAlam;
        $jumlah_pendaftar->labels(['Minggu Pertama', 'Minggu Kedua', 'Minggu Ketiga', 'Minggu Keempat']);
        $jumlah_pendaftar->dataset('Jumlah Pendaftar', 'line', [$minggu_pertama, $minggu_dua, $minggu_tiga, $minggu_empat])->color('#1C4587')->backgroundColor('#1C4587');

        $level_pengguna  = new JenisBencanaAlam;
        $level_pengguna->labels(['Newbie', 'Intermediate', 'Senior', 'Master']);
        $level_pengguna->dataset('Jumlah Pengguna', 'bar', [$newbie, $intermediate, $senior, $master])->color('#E06666')->backgroundColor('#E06666');

        $badges  = new JenisBencanaAlam;
        $badges->labels(['Perfect Man', 'Top Global Score']);
        $badges->dataset('Jumalah Pengguna', 'bar', [$perfect_man, $top_global])->color('#6AA84F')->backgroundColor('#6AA84F');

        $bulan  = ['January', 'February', 'March', 'April', 'May',
        'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        return view('pages/admin/dashboard', compact('jenis_bencana', 'jumlah_pendaftar', 'level_pengguna', 'badges' ,'bulan'));
    }
}
