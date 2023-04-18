@extends('layouts.appfront')

@section('content')
    <div >
        @foreach($products as $product)
            <ul style="color: black;">
                <li><a href="{{ asset('test/'.$product->id)}}">product name:{{ $product->name }}</a></li>
                <li>product price:{{ $product->price }} AUD</li>
                <li>description:{{ $product->description }}</li>
                <img src="{{$product->img1}}" alt="">
            </ul>
            <hr>
        @endforeach
    </div>
@endsection