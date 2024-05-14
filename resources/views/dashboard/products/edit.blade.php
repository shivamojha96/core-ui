@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Product</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('products.update', $product->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label>Name</label>
                                <input class="form-control" type="text" placeholder="Name" name="name" required autofocus value="{{ $product->name }}" />
                            </div>
                            <div class="form-group row">
                                <label>Cost</label>
                                <input class="form-control" type="text" placeholder="cost" name="cost" required value="{{ $product->cost }}" />
                            </div>
                            <div class="form-group row">
                                <label>Category_id</label>
                                <input class="form-control" type="text" placeholder="category_id" name="category_id" required value="{{ $product->code }}" />
                            </div>
                            <div class="form-group row">
                                <label>product_code</label>
                                <input class="form-control" type="text" placeholder="product_code" name="product_code" required value="{{ $product->code }}" />
                            </div>
                            <div class="form-group row">
                                <label>status</label>
                                <input class="form-control" type="text" placeholder="status" name="status" required value="{{ $product->code }}" />
                            </div>
                            <button class="btn btn-success" type="submit">Edit</button>
                            <a href="{{ route('categories.index') }}" class="btn btn-primary">Return</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')

@endsection