@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{ $product['gallary'] }}" alt="">
            </div>

            <div class="col-sm-6">
                <a href="/">go back</a>
                <h2>name:{{ $product['name'] }}</h2>
                <h3>price:{{ $product['price'] }}</h3>
                <h4>category:{{ $product['category'] }}</h4>
                <h5>description:{{ $product['description'] }}</h5>
                <br><br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                    <button  class="btn btn-success">add to cart</button>
                </form>
                <br><br>
                <button type="button" class="btn btn-primary">buy now</button>
                <br><br>
            </div>
        </div>
    </div>
@endsection
