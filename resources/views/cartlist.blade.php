@extends('master')
@section('content')
    <div class="custom-product ">
        <div class="row">

            <div class="col-sm-10">
                <div class="trending-wrapper">
                    <h2>cart list</h2>
                    <div class="">
                        @foreach ($products as $item)
                            <div class="row searched-item cart-list-divider">
                                <div class="col-sm-3">
                                    <a href="detail/{{ $item->id }}">
                                        <img src="{{ $item->gallary }}" class=" trending-img">
                                    </a>
                                </div>
                                <div class="col-sm-3">
                                    <div class="">
                                        <h2>{{ $item->name }}</h2>
                                        <h5>{{ $item->description }}</h5>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">remove from cart</a>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
