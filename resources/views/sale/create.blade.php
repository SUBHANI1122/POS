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
                                                <a href="#">Inventory</a>
                                            </li>
                                <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                <li class="list-inline-item">Create Category</li>
                            </ul>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            <!-- END BREADCRUMB-->
            <br>
<section>
    <div class="row" style="margin-left: 10px;margin-right: 10px">
        <div class="col-md-6">
             <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Customer Information</h3>
                                            </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('categories.index') }}" class="btn btn-sm btn-primary">Add Customer</a>
                    </div>
            </div>
     </div>
     <div class="card-body card-block">
        <div class="form-group">
            <select id="client_id" name="client_id" class="form-control">
                <option value="">--Select Customer--</option>
             @foreach($clients as $client)
            <option value="{{$client['id']}}">{{$client['customer_name']}}</option>
             @endforeach
            </select>
                                          
        </div>
    </div>
    </div>  
 </div>
                    <div class="col-md-6">
                        <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h3 class="mb-0">Invoice Information</h3>
                                            </div>
                                            <!-- <div class="col-4 text-right">
                                                <a href="{{ route('categories.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="card-body card-block">
                                        <form method="post" action="{{route('categories.store') }}" enctype="multipart/form-data" class="form-horizontal">
                                            @csrf 
                                            <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label for="text-input" class=" form-control-label">Invoice No</label>
                                                    <input type="text" id="text-input" name="invoice_no" id="invoice_no"  class="form-control" value="{{$sale_invoice}}" readonly="">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                                <div class="col-md-8">
                                                    <label for="text-input" class=" form-control-label">Invoice Date</label>
                                                    <input type="date" name="invoice_date" id="invoice_date" class="form-control">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label for="textarea-input" class=" form-control-label">Description</label>
                                                    <textarea name="description" id="description" rows="2" placeholder="Description..." class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                    </div>
                </div>
<div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Sale Detail</h3>
                     </div>
                                            <!-- <div class="col-4 text-right">
                                                <a href="{{ route('categories.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                                            </div> -->
                </div>
            </div>
            <div class="card-body card-block">
                 <div class="row">
                    <div class="col-md-4">
                        <label for="">Product</label>
                         <input type="text" placeholder="Search Product" class="form-control form-control-sm" name="product_name"  id="product_name">
                                                
                    </div>
                    <div class="col-md-2">
                        <label for="">Price</label>
                        <input type="number" class="form-control form-control-sm" name="cost"  id="cost" readonly="">
                    </div>
                     <div class="col-md-1">
                         <label for="">Quantiy</label>
                         <input type="number" placeholder="Enter task" class="form-control form-control-sm" name="qty" id="qty" value="1">
                    </div>
                    <div class="col-md-3">
                        <label for="">Amount</label>
                        <input type="number" placeholder="Enter task" class="form-control form-control-sm" name="amount" id="amount" readonly="">
                    </div>
                     <div class="col-md-2" style="margin-top:26px;">
                        <button id="addMore" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i></button>
                    </div>
                </div>
<div class="row" style="margin-top:26px;display: none;">
    <table class="table table-sm table-bordered" >
    <thead>
        <tr>
            <th>Name</th>
            <th>Cost</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody id="addRow" class="addRow">

    </tbody>
    <tbody>
      <tr>
        <td colspan="1" class="text-right">
            <strong>Total:</strong> 
        </td>
        <td>
            <input type="number" id="estimated_ammount" class="estimated_ammount" value="0" readonly>
        </td>
      </tr>
    </tbody>

    </table>
   <button type="submit" class="btn btn-success btn-sm">Submit</button>
  </form>

    </div>
  </div>
</div>
</div>
</section>

@endsection
@push('scripts')
<script>
$('#addMore').click(function(){
    alert('working');      
  });
</script>
@endpush
