@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Seller</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('sellers.update', $seller->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label>Shop_Name</label>
                                <input class="form-control" type="text" placeholder="Shop_Name" name="shop_name" required autofocus value="{{ $seller->shop_name }}" />
                            </div>
                            <div class="form-group row">
                                <label>address</label>
                                <input class="form-control" type="text" placeholder="address" name="address" required value="{{ $seller->address }}" />
                            </div>
                            <div class="form-group row">
                                <label>Contact_Person</label>
                                <input class="form-control" type="text" placeholder="Contact_Person" name="Contact_Person" required value="{{ $seller->contact_person }}" />
                            </div>
                             <div class="form-group row">
                                <label>Contact_Number</label>
                                <input class="form-control" type="text" placeholder="Contact_Number" name="contact_number" required value="{{ $seller->contact_number }}" />
                            </div> <div class="form-group row">
                                <label>Email</label>
                                <input class="form-control" type="email" placeholder="Email" name="email" required value="{{ $seller->email }}" />
                            </div> <div class="form-group row">
                                <label>Shop Code</label>
                                <input class="form-control" type="text" placeholder="Shop Code" name="shop_code" required value="{{ $seller->shop_code }}" />
                            </div> <div class="form-group row">
                                <label>status</label>
                                <input class="form-control" type="text" placeholder="Status" name="status" required value="{{ $seller->status }}" />
                            </div>
                            <button class="btn btn-success" type="submit">Edit</button>
                            <a href="{{ route('sellers.index') }}" class="btn btn-primary">Return</a>
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