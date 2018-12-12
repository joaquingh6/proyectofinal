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
    public function index()
    {
        if (isset(Auth::user()->role_id)) {

            if (Auth::user()->role_id == 1) {
                return view('admin.index');

            } else {

                return redirect('/');
            }
        } else {

            return redirect('/login');

        }
    }


    public function productos()
    {
        if (isset(Auth::user()->role_id)) {
            if (Auth::user()->role_id == 1) {
                $productos = Product::paginate(10);
                $categorias = Category::all();

                return view('admin.productos', compact('productos', 'categorias'));
            } else {

                return redirect('/');
            }
        } else {

            return redirect('/login');

        }

    }

    public function categorias()
    {
        if (isset(Auth::user()->role_id)) {
            if (Auth::user()->role_id == 1) {
                $categorias = Category::paginate(10);;
                return view('admin.categorias', compact('categorias'));

            } else {

                return redirect('/');

            }
        } else {

            return redirect('/login');

        }
    }

    public function usuarios()
    {
        if (isset(Auth::user()->role_id)) {
            if (Auth::user()->role_id == 1) {
                $usuarios = User::paginate(10);

                return view('admin.users', compact('usuarios'));

            } else {

                return redirect('/');

            }

        } else {

            return redirect('/login');

        }
    }

    public function rooms()
    {
        if (isset(Auth::user()->role_id)) {
            if (Auth::user()->role_id == 1) {


                $rooms = Room::paginate(10);

                return view('admin.rooms', compact('rooms'));
            } else {

                return redirect('/');

            }
        } else {

            return redirect('/login');

        }
    }
}
