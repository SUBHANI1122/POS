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
                                                <a href="#">General</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Modify Supplier</li>
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
                    <div class="card-body">
                        <form method="post" action="{{ route('suppliers.update', $client[0]['id']) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">Customer Information</h6>
                            <div class="pl-lg-4">
                                 <div class="row">
                                    <div class="col-6">                                    
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-stock">Supplier Name</label>
                                            <input type="text" name="supplier_name" id="supplier_name" class="form-control" placeholder="Customer Name" value="{{$client[0]['supplier_name']}}">
                                            <input type="hidden" name="id" id="id" value="{{$client[0]['id']}}">
                                           
                                        </div>
                                    </div>                            
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-stock">Email</label>
                                            <input type="email" name="supplier_email" id="supplier_email" class="form-control" placeholder="Email" value="{{$client[0]['supplier_email']}}">
                                           
                                        </div>
                                    </div>                            
                                </div>
                                <div class="row">
                                    <div class="col-6">                                    
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-stock">CNIC</label>
                                            <input type="text" name="supplier_cnic" id="supplier_cnic" class="form-control" placeholder="CNIC" value="{{$client[0]['supplier_cnic']}}">
                                           
                                        </div>
                                    </div>
                                    <div class="col-6">                                    
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-price">Phone</label>
                                            <input type="text" step=".01" name="supplier_phone" id="supplier_phone" class="form-control form-control-alternative" placeholder="Phone" value="{{$client[0]['supplier_phone']}}">
                                       
                                        </div>
                                    </div>                       
                                </div>
                                <div class="row">
                                     <div class="col-4">                                    
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-price">Address</label>
                                            <input type="text" step=".01" name="supplier_address" id="supplier_address" class="form-control form-control-alternative" placeholder="Address" value="{{$client[0]['supplier_address']}}">
                                       
                                        </div>
                                    </div>
                                     <div class="col-4">                                    
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-price">Company</label>
                                            <input type="text" step=".01" name="supplier_company" id="supplier_company" class="form-control form-control-alternative" placeholder="Company" value="{{$client[0]['supplier_company']}}">
                                       
                                        </div>
                                    </div>
                                     <div class="col-4">                                    
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-stock_defective">Status</label>
                                            <select class="form-control" name="status" id="status">
                                                <option value="1">
                                                    Active
                                                </option>
                                                <option value="0">
                                                    InActive
                                                </option>
                                            </select>
                                          
                                        </div>
                                    </div>    
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-success mt-4">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
