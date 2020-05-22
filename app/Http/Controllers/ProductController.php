<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        return view('product.create');
    }

    public function change()
    {
        return view('product.change');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'name'=>'required',
        'discription'=>'required',
        'price'=>'required',
        'image'=>'required']);

        $product = new Product([
            'name'=>$request->get('name'),
            'discription'=>$request->get('discription'),
            'price'=>$request->get('price'),
            'image'=>$request->get('image'),
        ]);
        $product->save();
        return redirect()->route('product.create')->with('success','Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {

           $product =  Product::find($id);

            $product -> name = $req->input('name');
            // $registration -> surname = $req->input('surname');
            $product -> discription = $req->input('discription');
            $product -> price = $req->input('price');
            $product -> image = $req->input('image');


            $product -> save();

           return redirect()-> route('home')->with('success', 'ОБНОВЛЕНИЕ прошло успешно ');
     
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)

    {
        Product::find($id)->delete();
        return redirect( route( 'home')) -> with('success', 'Продукт был успешно удален!');
    }

    public function allData(){
        
        
}
}
