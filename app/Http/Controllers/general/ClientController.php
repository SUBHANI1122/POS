<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Clients;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Clients::paginate(25);
        return view('general.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('general.clients.create');
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
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_phone' => 'required',
            'customer_cnic' => 'required',
        ]);
        $show = Clients::create($request->all());
        return redirect()->route('clients.index')->withStatus('Successfully added customer.');
        
        
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
        $client = Clients::where('id',$id)->get();
         return view('general.clients.edit', compact('client'));
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
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_phone' => 'required',
            'customer_cnic' => 'required',
        ]);
        $customer = Clients::find($request->id);
        $customer->customer_name = $request->customer_name;
        $customer->customer_email = $request->customer_email;
        $customer->customer_phone = $request->customer_phone;
        $customer->customer_cnic = $request->customer_cnic;
        $customer->status = $request->status;
        $customer->save();
        return redirect()
            ->route('clients.index')
            ->withStatus('Successfully modified customer.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Clients::destroy($id);

        return redirect()
            ->route('clients.index')
            ->withStatus('Customer successfully removed.');
    }
}
