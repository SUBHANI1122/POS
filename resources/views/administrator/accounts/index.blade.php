@extends('layouts.app', ['page' => 'Clients', 'pageSlug' => 'clients', 'section' => 'clients'])

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
                                            <li class="list-inline-item">Accounts</li>
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
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Accounts</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('accounts.create') }}" class="btn btn-sm btn-primary">Add Account</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('alerts.success')

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th>Account No</th>
                                <th>Account Name</th>
                                <th>Account Balance</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                       <td style="width: 200px"><a href="#">{{ $client->account_no }}</a></td>
                                        <!-- <td>{{ $client->customer_email }}</td> -->
                                        <td >{{$client->account_name }}</td>
                                        <td>{{ $client->initial_balance }}</td>
                                        <td class="td-actions text-right">
                                            <!-- <a href="{{ route('accounts.show', $client->id) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="More Details">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ route('accounts.edit', $client->id) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Account">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </a> -->
                                            <form action="{{ route('accounts.destroy', $client->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Delete Customer" onclick="confirm('Are you sure you want to delete Account?') ? this.parentElement.submit() : ''">
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
                    <nav class="d-flex justify-content-end" aria-label="...">
                        {{ $clients->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
