@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Service</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('services.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label>Name</label>
                                <input class="form-control" type="text" placeholder="Name" name="name" required autofocus />
                            </div>
                            <div class="form-group row">
                                <label>Code</label>
                                <input class="form-control" type="text" placeholder="Code" name="code" required />
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="category">Category</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="category" name="category_id">
                                        <option value="0">Please select</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label>Price</label>
                                <input class="form-control" type="text" placeholder="Price" name="price" required />
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Status</label>
                                <div class="col-md-9 col-form-label">
                                    <div class="form-check">
                                        <input class="form-check-input" id="radio1" type="radio" value="1" name="status">
                                        <label class="form-check-label" for="radio1">Active</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="radio2" type="radio" value="0" name="status">
                                        <label class="form-check-label" for="radio2">In Active</label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit">Add</button>
                            <a href="{{ route('services.index') }}" class="btn btn-primary">Return</a>
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