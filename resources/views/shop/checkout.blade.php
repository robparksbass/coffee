@extends('layouts.master')
@section('title')
    Coffee Shop
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-3 col-sm-offset-3">
            <h1>Checkout</h1>
            <h4>Your Total: ${{ $total }}</h4>
            <form action="{{ route('checkout') }}" method="post">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" class="form-control" required>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection