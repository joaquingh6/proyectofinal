<?php

namespace App\Http\Controllers;

use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Rent;
use Telegram;
use Auth;
use App\Category;




class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updatedActivity()
    {
        $activity = Telegram::getUpdates();
        dd($activity);
    }
    public function index()
    {

    }
    public function reservar(Request $request){




        $fecha = Carbon::now()->format('d M Y');

        $new['start_date'] = $fecha;
        $new['end_date'] = Carbon::parse($request->end_date)->format('d M Y');
        $new['user_id'] = Auth::user()->id;
        $new['product_id'] = $request->idproducto;
        $new['room_id'] = $request->room_id;

        $rent = Rent::create($new);


        $producto = Product::where('id' , $request->idproducto)->first();
        $producto->status = 'RESERVADO';
        $producto->save();

        $text = 'Producto ' . $producto->name . ' reservado por ' . Auth::user()->name . ' hasta ' . $request->end_date;

        Telegram::sendMessage([
            'chat_id' => '-1001353881659',
            'parse_mode' => 'HTML',
            'text' => $text
        ]);



        $productos = Product::where('status' ,'NO RESERVADO')->paginate(5);
        $categorias = Category::all();

        return view('welcome', compact('productos' , 'categorias'));

    }



    public function devolver($id){

        $fecha = Carbon::now()->format('d M Y');

        $reserva = Rent::find($id);
        $reserva->real_end_date = $fecha;
        $reserva->save();

        $producto = Product::find($reserva->product_id);
        $producto->status = 'NO RESERVADO';
        $producto->save();


        $reservados = Rent::where('user_id',Auth::user()->id)->get();

        return redirect()->route('perfil'); 


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       /*
       $request->validate([
           'name' => 'require|min:3|max:50',
           'description' => 'require|min:3|max:100',
        ]);
       */

        $new['name'] = $request->name;
        $new['description'] = $request->description;
        $new['category_id'] = $request->category_id;
        $new['serial'] = md5(microtime());

        $producto = Product::create($new);
        $productos = Product::paginate(10);
        $categorias = Category::all();

         return redirect()->route('admin.productos'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id' , $id)->first();

        $categorias = Category::all();


        return view('products.edit' , compact('product','categorias'));
    }

    public function guardar(Request $request, $id)
    {

        $product = Product::find($id);
        $new['category_id'] = $request->category_id;
        $new['name'] = $request->name;
        $new['description'] = $request->description;
        $product->update($new);
        $product->save();

        $productos = Product::paginate(10);
        $categorias = Category::all();
        return redirect()->route('admin.productos'); 


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Product::find($id)->delete();
        $productos = Product::paginate(10);
        $categorias = Category::all();

        return redirect()->route('admin.productos'); 
    }
}
