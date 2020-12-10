<?php

namespace App\Http\Controllers\inventory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Categories;
use App\Model\Products;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::paginate(25);
        return view('inventory.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories = Categories::all();
        return view('inventory.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'stock' => 'required',
            'price' => 'required'
        ]);
     $show = Products::create($request->all());
      return redirect()
            ->route('products.index')
            ->withStatus('Successfully added Product.');
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
        $product = Products::where('id',$id)->get();
        $categories = Categories::all();

         return view('inventory.products.edit', compact('categories', 'product'));
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
        $request->validate([
            'product_name' => 'required',
            'stock' => 'required',
            'price' => 'required'
        ]);

        $product = Products::find($request->id);
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->save();
      return redirect()
            ->route('products.index')
            ->withStatus('Successfully modified Product.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Products::destroy($id);
        return redirect()->route('products.index')->withStatus('Successfully deleted Product.');
    }
}
