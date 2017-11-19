<?php

namespace App\Http\Controllers;

use App\TaskList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function wellcome()
    {
        $tasklists = TaskList::where('user_id', Auth::user()->id)->get();

        return view('welcome')->with(['tasklists' => $tasklists]);
    }


    public function tasklist($listId) {
       $tasklist = TaskList::findOrFail($listId);

        return view('tasklist')->with(['tasklist' => $tasklist]);
    }

    public function saveList(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $list = new TaskList();
        $list->title = $request->title;
        $list->description = $request->description;
        $list->user_id = Auth::user()->id;
        $list->save();

        return redirect('/');
    }
}
