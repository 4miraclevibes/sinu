<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;
class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::all();
        return view('pages.backend.announcements.index', compact('announcements'));
    }

    public function create()
    {
        return view('pages.backend.announcements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'required',
            'content' => 'required',
        ]);
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        Announcement::create($data);
        return redirect()->route('announcements.index')->with('success', 'Announcement created successfully');
    }

    public function edit($id)
    {
        $announcement = Announcement::find($id);
        return view('pages.backend.announcements.edit', compact('announcement'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'required',
            'content' => 'required',
        ]);
        $announcement = Announcement::find($id);
        $announcement->update($request->all());
        return redirect()->route('announcements.index')->with('success', 'Announcement updated successfully');
    }

    public function destroy($id)
    {
        $announcement = Announcement::find($id);
        $announcement->delete();
        return redirect()->route('announcements.index')->with('success', 'Announcement deleted successfully');
    }   
}
