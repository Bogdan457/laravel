<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\History;
use App\Http\Requests\DataRequest;
use DB;
use Illuminate\Support\Facades\Auth;
use luminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Input;


class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $storiesUser = new History();
   $storiesUser = Auth::user()->histories;

     return view('stories.allstories', ['stories' => $storiesUser->all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $stories = new History();
     return view('stories.create', ['stories' => $stories->find(1)]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataRequest $req)
    {
      $user = Auth::user();
      $stories = History::create([
        'title' => $req->input('title'),
        'description' => $req->input('description'),
        'user_id' => $user->id,
      ]);
    $stories->save();
    return redirect()->route('allstories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\History  $history2
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
      $stories = new History();
        $user = Auth::user()->histories;
     return view('stories.one-stories', ['stories' => $user->find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\History2  $history2
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $stories = new History();
     return view('stories.update', ['stories' => $stories->find($id)]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\History2  $history2
     * @return \Illuminate\Http\Response
     */
    public function update(DataRequest $req, $id)
    {
      $stories = History::find($id);
      $stories->title = $req->input('title');
      $stories->description = $req->input('description');
    $stories->save();
    return view('stories.one-stories', ['stories' => $stories->find($id)])->with('success', "Запись была обновлена");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\History2  $history2
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
      History::find($id)->delete();
      return redirect()->route('allstories.index');
    }
}
