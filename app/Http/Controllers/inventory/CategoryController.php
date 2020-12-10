<?php

namespace App\Http\Controllers\inventory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Categories;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::paginate(25);
        return view('inventory.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventory.categories.create');
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
            'category_name' => 'required',
        ]);

     $show = Categories::create($request->all());
      return redirect()
            ->route('categories.index')->withStatus('Successfully added Category.');

            //  return redirect()
            // ->route('categories.index')
            // ->withStatus('Category successfully created.');
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

        $categories = Categories::where('id',$id)->get();
         return view('inventory.categories.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    $request->validate([
            'category_name' => 'required',
        ]);

        $category = Categories::find($request->id);
        $category->category_name = $request->category_name;
        $category->description = $request->description;
        $category->save();
      return redirect()
            ->route('categories.index')->withStatus('Successfully modified Category.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categories::where('id',$id)->delete();
        return redirect()
            ->route('categories.index')->withStatus('Successfully deleted Category.');
    }
}
