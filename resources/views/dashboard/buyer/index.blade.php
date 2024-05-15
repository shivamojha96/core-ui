@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i>Buyers List
                    </div>
                    <div class="card-body">
                        @if(Session::has('message'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <a href="{{ route('buyers.create') }}" class="btn btn-primary m-2">Add Buyer</a>
                        </div>
                        <br>
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>mobile_number</th>
                                    <th>eamil</th>
                                    <th>code</th>
                                    <th>status</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($buyers as $buyer)
                                <tr>
                                    <td><strong>{{ $buyer->name }}</strong></td>
                                    <td><strong>{{ $buyer->address }}</strong></td>
                                    <td><strong>{{ $buyer->mobile_number }}</strong></td>
                                    <td><strong>{{ $buyer->eamil }}</strong></td>
                                    <td><strong>{{ $buyer->code }}</strong></td>
                                    <td><strong>{{ $buyer->status }}</strong></td>
                                    <td>
                                        <a href="{{ url('/buyers/' . $buyer->id) }}" class="btn btn-primary">View</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('/buyers/' . $buyer->id . '/edit') }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('buyers.destroy', $buyer->id ) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')

@endsection