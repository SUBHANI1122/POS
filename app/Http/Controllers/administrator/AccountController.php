<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Accounts;
use Illuminate\Support\Facades\DB;

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
        return view('administrator.accounts.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $account_no=Accounts::select('account_no')->orderBy('id', 'desc')->first();
        if ($account_no=='') {
           $account_no='1';
        }else{
            $account_no;
        }
        
        $account_type = DB::table('account_type')->get();
        return view('administrator.accounts.create', compact('account_no','account_type'));
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
            'account_no' => 'required',
            'account_name' => 'required',
            'initial_balance' => 'required'
        ]);
        $account_no = $request->account_no;
        $increments=$account_no+1;

        $customer = new Accounts;
        $customer->account_no = '00'.$increments;
        $customer->account_name = $request->account_name;
        $customer->initial_balance = $request->initial_balance;
        $customer->account_type = $request->account_type;
        $customer->description = $request->description;
        $customer->save();
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
            'account_no' => 'required',
            'account_name' => 'required',
            'initial_balance' => 'required'
        ]);
        $customer = Accounts::find($request->id);
        $customer->account_no = $request->account_no;
        $customer->account_name = $request->account_name;
        $customer->initial_balance = $request->initial_balance;
        $customer->account_type = $request->account_type;
        $customer->description = $request->description;
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
