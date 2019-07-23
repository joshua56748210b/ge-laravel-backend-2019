<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Alert;

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
    public function index($alertType = null)
    {

        if(Auth::check()){
          switch ($alertType) {
            case 'success':
              Alert::message('Robots are working');
              break;
            default:
              break;
          }
          return view('dashboard');
        } else {
          return redirect('/login');
        }
    }
}
