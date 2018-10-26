<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use Auth;
use App\Product;
use Telegram;
use App\Rent;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {




        return view('home');
    }

    public function logout(){

        // Cerramos la sesión
        Auth::logout();
        // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
        return redirect('/login'); //redireccionar al admin nuevamente para que se regargue la pagina
    }

    public function perfil(){

        $reservados = Rent::where('user_id',Auth::user()->id)->get();



        return view('perfil' , compact('reservados'));

    }

    public function welcome(){

        $productos = Product::where('status' ,'NO RESERVADO')->get();

        $rooms = Room::all();

        return view('welcome', compact('productos' , 'rooms'));
    }
}
