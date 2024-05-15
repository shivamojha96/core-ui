@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>buyer: {{ $buyer->name }}</h4>
                    </div>
                    <div class="card-body">
                        <h4>Name</h4>
                        <p>{{ $buyer->name }}</p>
                        <h4>Address</h4>
                        <p>{{ $buyer->address }}</p>
                        <h4>Mobile Number</h4>
                        <p>{{ $buyer->mobile_number }}</p>
                        <h4>email</h4>
                        <p>{{ $buyer->eamil }}</p>
                        <h4>code</h4>
                        <p>{{ $buyer->code }}</p>
                        <h4>status</h4>
                        <p>{{ $buyer->status }}</p>
                        <a href="{{ route('buyers.index') }}" class="btn btn-primary">Return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')

@endsection