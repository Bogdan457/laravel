<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\History;
use App\Http\Requests\DataRequest;
use DB;
use Illuminate\Support\Facades\Auth;
use luminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Input;

class PostsController extends Controller
{
    public function admin() {
      $stories = new History();
        return view('stories.admin', ['stories' => $stories->all()]);
    }
}
