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
                                            <li class="list-inline-item">Create New Customer</li>
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
                                <h3 class="mb-0">New Customer</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('clients.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('clients.store') }}" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">Customer Information</h6>
                            <div class="pl-lg-4">
                                 <div class="row">
                                    <div class="col-6">                                    
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-stock">Customer Name</label>
                                            <input type="text" name="customer_name" id="customer_name" class="form-control" placeholder="Customer Name" required>
                                           
                                        </div>
                                    </div>                            
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-stock">Email</label>
                                            <input type="email" name="customer_email" id="customer_email" class="form-control" placeholder="Email" required>
                                           
                                        </div>
                                    </div>                            
                                </div>
                                <div class="row">
                                    <div class="col-6">                                    
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-stock">CNIC</label>
                                            <input type="text" name="customer_cnic" id="customer_cnic" class="form-control" placeholder="CNIC" required>
                                           
                                        </div>
                                    </div>
                                    <div class="col-6">                                    
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-price">Phone</label>
                                            <input type="text" step=".01" name="customer_phone" id="customer_phone" class="form-control form-control-alternative" placeholder="Phone" required>
                                       
                                        </div>
                                    </div>                       
                                </div>
                                <div class="row">
                                     <div class="col-6">                                    
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-price">Address</label>
                                            <input type="text" step=".01" name="customer_address" id="customer_address" class="form-control form-control-alternative" placeholder="Address" required>
                                       
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
