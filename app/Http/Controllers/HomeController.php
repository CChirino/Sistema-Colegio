<?php

namespace App\Http\Controllers;
use App\Pensum;
use App\Periodo;
use App\Role;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $pensum = Pensum::get();
        // $periodo = Periodo::get();
        $role =  DB::table('permission_role')
                        ->where('id')
                        ->get();
        return view('admin.index', compact('role'));
    }
}
