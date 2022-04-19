<?php

namespace App\Http\Controllers;

use App\Models\App;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $apps = App::all();
        return view('home')->with([
            'apps' => $apps
        ]);
    }
}
