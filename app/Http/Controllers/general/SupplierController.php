<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Suppliers;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Suppliers::paginate(25);
        return view('general.suppliers.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('general.suppliers.create');
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
            'supplier_name' => 'required',
            'supplier_email' => 'required',
            'supplier_phone' => 'required',
            'supplier_cnic' => 'required',
            'supplier_company' => 'required'
        ]);
        $show = Suppliers::create($request->all());
        return redirect()->route('suppliers.index')->withStatus('Successfully added Supplier.');
        
        
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
        $client = Suppliers::where('id',$id)->get();
         return view('general.suppliers.edit', compact('client'));
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
            'supplier_name' => 'required',
            'supplier_email' => 'required',
            'supplier_phone' => 'required',
            'supplier_cnic' => 'required',
            'supplier_company' => 'required'
        ]);
        $supplier = Suppliers::find($request->id);
        $supplier->supplier_name = $request->supplier_name;
        $supplier->supplier_email = $request->supplier_email;
        $supplier->supplier_phone = $request->supplier_phone;
        $supplier->supplier_company = $request->supplier_company;
        $supplier->supplier_cnic = $request->supplier_cnic;
        $supplier->status = $request->status;
        $supplier->save();
        return redirect()
            ->route('suppliers.index')
            ->withStatus('Successfully modified Suppliers.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Suppliers::destroy($id);

        return redirect()
            ->route('suppliers.index')
            ->withStatus('Suppliers successfully removed.');
    }
}
