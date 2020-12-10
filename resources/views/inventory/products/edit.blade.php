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
                                            <li class="list-inline-item">Create Product</li>
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
            <!-- END BREADCRUMB-->
            <br>
            <section>
                   <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">New Product</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('products.index') }}" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('products.update', $product[0]['id']) }}" autocomplete="off">
                            @csrf
                             @method('put')

                            <h6 class="heading-small text-muted mb-4">Product Information</h6>
                            <div class="pl-lg-4">
                                 <div class="row">
                                    <div class="col-6">
                                        <input type="hidden" name="id" id="id" value="{{ $product[0]['id'] }}">                              
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-stock">Product Name</label>
                                            <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Product Name" value="{{ $product[0]['product_name'] }}">
                                           
                                        </div>
                                    </div>                            
                                    <div class="col-6">                                    
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-stock_defective">Category</label>
                                           <select id="category_id" name="category_id" class="form-control">
                                               @foreach($categories as $category)
                                                @if($category['id'] == $product[0]['category_id'])
                                                <option value="{{$category['id']}}" selected>{{$category['category_name']}}</option>
                                            @else
                                                <option value="{{$category['id']}}">{{$category['category_name']}}</option>
                                            @endif
                                               @endforeach
                                           </select>
                                          
                                        </div>
                                    </div>                            
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="input-description">Description</label>
                                    <input type="text" name="description" id="input-description" class="form-control" placeholder="Description" value="{{ $product[0]['description'] }}">
                                </div>
                                <div class="row">
                                    <div class="col-4">                                    
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-stock">Stock</label>
                                            <input type="number" name="stock" id="stock" class="form-control" placeholder="Stock" value="{{ $product[0]['stock'] }}">
                                           
                                        </div>
                                    </div>
                                    <div class="col-4">                                    
                                        <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-price">Price</label>
                                            <input type="number" step=".01" name="price" id="price" class="form-control form-control-alternative" placeholder="Price" value="{{ $product[0]['price'] }}">
                                       
                                        </div>
                                    </div>
                                     <div class="col-4">                                    
                                        <div class="form-group{{ $errors->has('stock_defective') ? ' has-danger' : '' }}">
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
                                    <button type="submit" class="btn btn-success mt-4">update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            </section>
@endsection

@push('js')
    <script>
        new SlimSelect({
            select: '.form-select'
        })
    </script>
@endpush