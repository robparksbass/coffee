@extends('layouts.master')
@section('title')
    Coffee Shop
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="http://media.nj.com/entertainment_impact_dining/photo/coffee-stock-photo-0e8b300f42157b6f.jpg" alt="coffee" class="img-responsive">
                <div class="caption">
                    <h3>Product Title</h3>
                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti aspernatur provident dolorem assumenda sunt aliquam voluptatibus asperiores ullam distinctio vel quod quis, quidem delectus officiis vitae aut qui exercitationem? Illo!</p>
                    <div class="clearfix">
                        <div class="pull-left price">$12</div>
                        <a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection