<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{   
    private $user;
    private $objImagem;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->user=new User();
        $this->objImagem=new Gallery();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        // dd($img);
        $images=$this->objImagem->all();
        $user=$this->user->find( Auth::user()->id );
        //dd($user);
        return view('home', compact('user', 'images'));
    }   
}
