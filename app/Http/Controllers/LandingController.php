<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Program;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $announcements = Announcement::all();
        // dd(json_encode($announcements->toArray(), JSON_PRETTY_PRINT));
        return view('pages.frontend.landing', compact('announcements'));
    }
    public function program(Announcement $announcement)
    {   
        return view('pages.frontend.program', compact('announcement'));
    }   
    public function berita()
    {
        $announcements = Announcement::all();
        return view('pages.frontend.berita.index', compact('announcements'));
    }
    public function beritaShow(Announcement $announcement)
    {
        return view('pages.frontend.berita.show', compact('announcement'));
    }
    public function aktifitas()
    {
        $announcements = Announcement::all();
        return view('pages.frontend.aktifitas.index', compact('announcements'));
    }
    public function aktifitasShow(Announcement $announcement)
    {
        return view('pages.frontend.aktifitas.show', compact('announcement'));
    }
    public function pengumuman()
    {
        $announcements = Announcement::all();
        return view('pages.frontend.pengumuman.index', compact('announcements'));
    }
    public function pengumumanShow(Announcement $announcement)
    {
        return view('pages.frontend.pengumuman.show', compact('announcement'));
    }
}
