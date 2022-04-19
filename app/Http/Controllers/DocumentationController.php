<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Documentation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentationController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('fr');
        $this->middleware('auth');
    }
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Documentation $documentation, Request $request)
    {
        abort_if(Auth::user()->role()->first()->name !== 'admin', 403);

        $documentation->update($request->all());

        return [
            'status' => true
        ];
    }

    public function show(App $app)
    {
        return view('documentations.show')->with([
            'item' => $app
        ]);
    }

    public function edit(Documentation $documentation)
    {
        //
    }

    public function update(Request $request, Documentation $documentation)
    {
        //
    }

    public function destroy(Documentation $documentation)
    {
        //
    }
}
