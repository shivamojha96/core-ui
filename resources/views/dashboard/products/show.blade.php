@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Product: {{ $product->name }}</h4>
                    </div>
                    <div class="card-body">
                        <h4>Name</h4>
                        <p>{{ $product->name }}</p>
                        <h4>cost</h4>
                        <p>{{ $product->cost }}</p>
                        <h4>category_id</h4>
                        <p>{{ $product->category_id }}</p>
                        <h4>product_code</h4>
                        <p>{{ $product->product_code }}</p>
                        <h4>status</h4>
                        <p>{{ $product->status }}</p>
                        <a href="{{ route('products.index') }}" class="btn btn-primary">Return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')

@endsection