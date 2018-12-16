<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        if (Auth::user()->role_id == 1){

           $new['name'] = $request->name;

           $categoria = Category::create($new);
           $categorias = Category::all();

            return redirect()->route('admin.categorias'); 

        }else {

                return redirect()->route('welcome'); 

        }
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
        if (Auth::user()->role_id == 1){
            $category = Category::where('id' , $id)->first();


            return view('categories.edit')->with('category' , $category);

        }else {

               return redirect()->route('welcome'); 
                    
        }
    }

    public function guardar(Request $request,$id){

            $category = Category::find($id);

           $category->update($request->all());
           $category->save();

            $categorias = Category::all();
            return redirect()->route('admin.categorias'); 

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
        $category = Category::find($id)->delete();
        $categorias = Category::all();

            return redirect()->route('admin.categorias'); 

    }
}
