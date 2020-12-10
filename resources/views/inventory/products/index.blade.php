@extends('layouts.app', ['page' => 'List of Products', 'pageSlug' => 'products', 'section' => 'inventory'])

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
                                            <li class="list-inline-item">Products</li>
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
            <!-- END BREADCRUMB-->
            <section>
                <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Products</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary">New product</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                     @include('alerts.success')
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">Category</th>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td><a href="{{ route('categories.show', $product->category) }}">{{ $product->category->category_name }}</a></td>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{$product->price }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td>
                                            @if($product->status == 1)
                                                <span class="badge badge-success">Active</span>
                                                @else
                                                <span class="badge badge-danger">InActive</span>
                                            @endif
                                        </td>
                                        <td class="td-actions text-right">
                                           <!--  <a href="{{ route('products.show', $product->id) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="More Details">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a> -->
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Product">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Delete Products" onclick="confirm('Are you sure you want to delete this category?') ? this.parentElement.submit() : ''">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end">
                        {{ $products->links() }}
                    </nav>
                </div>
            </section>
    </div>
@endsection
