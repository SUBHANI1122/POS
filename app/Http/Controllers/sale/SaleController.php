<?php

namespace App\Http\Controllers\sale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Sales;
use App\Model\Clients;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $categories = Sales::paginate(25);
        return view('inventory.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Clients::all();
        $sale_invoice=Sales::select('sale_invoice')->orderBy('id', 'desc')->first();
        if ($sale_invoice=='') {
           $sale_invoice='1';
        }else{
            $sale_invoice;
        }
        return view('sale.create', compact('clients', 'sale_invoice'));
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

     $show = Sales::create($request->all());
      return redirect()
            ->route('categories.index')->withStatus('Successfully added Category.');
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
        //
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
        Sales::where('id',$id)->delete();
        return redirect()
            ->route('categories.index')->withStatus('Successfully deleted Category.');
    }
}
