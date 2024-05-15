@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Seller</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('sellers.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label>Shop Name</label>
                                <input class="form-control" type="text" placeholder="Shop Name" name="shop_name" required autofocus />
                            </div>
                            <div class="form-group row">
                                <label>Address</label>
                                <input class="form-control" type="text" placeholder="Address" name="address" required />
                            </div>
                            <div class="form-group row">
                                <label>Contact Person</label>
                                <input class="form-control" type="text" placeholder="Contact Person" name="contact_person" required />
                            </div>
                            <div class="form-group row">
                                <label> Contact Number</label>
                                <input class="form-control" type="text" placeholder="Contact Number" name="contact_number" required />
                            </div>
                            <div class="form-group row">
                                <label>Email</label>
                                <input class="form-control" type="mail" placeholder="Email" name="email" required />
                            </div>
                            <div class="form-group row">
                                <label>Shop Code</label>
                                <input class="form-control" type="text" placeholder="Shop Code" name="shop_code" required />
                            </div>

                            <button class="btn btn-success" type="submit">Add</button>
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