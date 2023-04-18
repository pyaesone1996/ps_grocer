@extends('layouts.appfront')

@section('content')
    <div >
            <ul style="color: black;">
                <li>product name:{{ $product->name }}</li>
                <li>product price:{{ $product->price }} AUD</li>
                <li>description:{{ $product->description }}</li>
                <img src="{{$product->img1}}" alt="">
            </ul>
    </div>
@endsection