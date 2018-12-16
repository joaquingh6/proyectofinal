<?php

namespace App\Http\Controllers;

use App\Category;
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

        return view('/');
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

    public function welcome(Request $request){

        $productos = Product::where('status' ,'NO RESERVADO')
        ->where(function($query) use ($request){
            $query->where('name', 'LIKE' , '%' . $request->dato . '%')
                  ->orWhere('serial', 'LIKE' , '%' . $request->dato . '%')
                  ->orwhere('id', 'LIKE' , '%' . $request->dato . '%');
        })->paginate(8);

        $rooms = Room::all();
        $categorias = Category::all();
        if (isset($request->category_id)){
            $productos = Product::where('status' ,'NO RESERVADO')->where('category_id',  $request->category_id)

                ->paginate(10);
        if ($request->ajax()) {

            return response()->json(view('tablaproductos', compact('productos', 'rooms', 'categorias'))->render());

        }
        }
        if ($request->ajax()) {

            return response()->json(view('tablaproductos', compact('productos', 'rooms', 'categorias'))->render());

        }



        return view('welcome', compact('productos' , 'rooms','categorias'));



    }
}
