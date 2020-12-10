<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Accounts;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Accounts::paginate(25);
        return view('admnistrator.accounts.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admnistrator.accounts.create');
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
            'account_name' => 'required',
            'initial_amount' => 'required',
            'customer_phone' => 'required',
            'customer_cnic' => 'required',
        ]);
        $show = Accounts::create($request->all());
        return redirect()->route('accounts.index')->withStatus('Successfully added account.');
        
        
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
        $client = Accounts::where('id',$id)->get();
         return view('administrator.accounts.edit', compact('client'));
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
        $customer = Accounts::find($request->id);
        $customer->customer_name = $request->customer_name;
        $customer->customer_email = $request->customer_email;
        $customer->customer_phone = $request->customer_phone;
        $customer->customer_cnic = $request->customer_cnic;
        $customer->status = $request->status;
        $customer->save();
        return redirect()
            ->route('accounts.index')
            ->withStatus('Successfully modified account.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Accounts::destroy($id);

        return redirect()
            ->route('accounts.index')
            ->withStatus('Account successfully removed.');
    }
}
