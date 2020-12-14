@extends('layouts.app')

@section('content')
<section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Administrator</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Create New Account</li>
                                        </ul>
                                    </div>
                                    <!-- <button class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i>add item</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
<section>
      <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">New Account</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('accounts.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('accounts.store') }}" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">Account Information</h6>
                            <div class="pl-lg-4">
                                 <div class="row">
                                    <div class="col-6">                                    
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-stock">Account No</label>
                                            <input type="text" name="account_no" id="account_no" class="form-control"  readonly="" value="{{$account_no->account_no}}">
                                           
                                        </div>
                                    </div>                            
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-stock">Account Name</label>
                                            <input type="text" name="account_name" id="account_name" class="form-control" placeholder="Account Name" required>
                                           
                                        </div>
                                    </div>                            
                                </div>
                                <div class="row">
                                    <div class="col-6">                                    
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-stock">Initial Balance</label>
                                            <input type="number" name="initial_balance" id="initial_balance" class="form-control" placeholder="Balance" required>
                                           
                                        </div>
                                    </div>
                                    <div class="col-6">                                    
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-price">Account Type</label>
                                            <div class="form-group">
                                           <select id="account_type" name="account_type" class="form-control">
                                               @foreach($account_type as $key)
                                                    <option value="{{$key->id}}">{{$key->type}}</option>
                                               @endforeach
                                           </select>
                                          
                                        </div>
                                       
                                        </div>
                                    </div>                       
                                </div>
                                <div class="row">
                                     <div class="col-12">                                    
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-price">Description</label>
                                            <input type="text" step=".01" name="description" id="description" class="form-control form-control-alternative" placeholder="Description">
                                       
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-success mt-4">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
