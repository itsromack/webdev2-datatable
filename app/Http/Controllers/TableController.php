<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class TableController extends Controller
{
    public function index(Request $request)
    {
        $announcements = Announcement::all();
        return view('table', compact('announcements'));
    }

    public function edit($id)
    {
        $announcement = Announcement::find($id);
        return view('edit-announcement', compact('announcement'));
    }

    public function update(Request $request)
    {
        $announcement = Announcement::find($request->id);
        $announcement->title = $request->title;
        $announcement->content = $request->content;
        $announcement->start_date = $request->start_date;
        $announcement->end_date = $request->end_date;
        $announcement->is_active = $request->is_active;
        if ($announcement->save()) {
            return redirect('/datatable');
        }
        return redirect('/datatable');
    }

    public function view($id)
    {
        $announcement = Announcement::find($id);
        return view('view-announcement', compact('announcement'));
    }
}