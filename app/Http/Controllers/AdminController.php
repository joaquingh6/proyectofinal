<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\User;
use App\Product;
use App\Room;



class AdminController extends Controller
{
    public function index(){

        if (Auth::user()->role_id == 1){

            return view('admin.index');

        }else{

            $productos = Product::where('status' ,'NO RESERVADO')->get();

            $rooms = Room::all();

            return view('welcome', compact('productos' , 'rooms'));
        }

    }

    public function productos()
    {
        if (Auth::user()->role_id == 1){
            $productos = Product::all();
            $categorias = Category::all();

            return view('admin.productos',compact('productos' , 'categorias'));
            }else{


            $productos = Product::where('status' ,'NO RESERVADO')->get();

            $rooms = Room::all();

            return view('welcome', compact('productos' , 'rooms'));
        }

    }

    public function categorias()
    {
        if (Auth::user()->role_id == 1){
            $categorias = Category::all();
            return view('admin.categorias' , compact('categorias'));

        }else{


            $productos = Product::where('status' ,'NO RESERVADO')->get();

            $rooms = Room::all();

            return view('welcome', compact('productos' , 'rooms'));
        }
    }

    public function usuarios()
    {
        if (Auth::user()->role_id == 1){
            $usuarios = User::all();

             return view('admin.users' , compact('usuarios'));

        }else{


            $productos = Product::where('status' ,'NO RESERVADO')->get();

            $rooms = Room::all();

            return view('welcome', compact('productos' , 'rooms'));

        }
    }

    public function rooms()
    {
        if (Auth::user()->role_id == 1){


        $rooms = Room::all();

        return view('admin.rooms' , compact('rooms'));
        }else{


            $productos = Product::where('status' ,'NO RESERVADO')->get();

            $rooms = Room::all();

            return view('welcome', compact('productos' , 'rooms'));

        }
    }
}
