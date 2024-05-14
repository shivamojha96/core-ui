@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Category</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categories.update', $category->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label>Name</label>
                                <input class="form-control" type="text" placeholder="Name" name="name" required autofocus value="{{ $category->name }}" />
                            </div>
                            <div class="form-group row">
                                <label>Short_Name</label>
                                <input class="form-control" type="text" placeholder="Short_Name" name="short_name" required value="{{ $category->short_name }}" />
                            </div>
                            <div class="form-group row">
                                <label>Code</label>
                                <input class="form-control" type="text" placeholder="Code" name="code" required value="{{ $category->code }}" />
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