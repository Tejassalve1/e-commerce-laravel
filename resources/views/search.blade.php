@extends('master')
@section('content')
    <div class="custom-product ">
        <div class="row">

            <div class="col-sm-4">
                <a href="#">filter</a>
            </div>
            <div class="col-sm-4">
                <div class="trending-wrapper">
                    <h4>result for product</h4>
                    <div class="">
                        @foreach ($products as $item)
                            <div class="searched-item">
                                <a href="detail/{{ $item['id'] }}">
                                    <img src="{{ $item['gallary'] }}" class=" trending-img">
                                    <div class="">
                                        <h2>{{ $item['name'] }}</h2>
                                        <h5>{{ $item['description'] }}</h5>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
