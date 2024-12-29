@extends('layouts.default') 
@section('title', 'Ecom - Product Details') 
@section('content') 
<main class="container">
    <section class="mt-4">
        <img src="{{$product->image}}" alt="{{$product->title}}" class="img-fluid" style="width: 250px; height: 250px;">
        @if (session()->has('success'))
        <div class="alert alert-success">{{session()->get('success')}}</div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
        @endif
        <h1 class="mt-2">{{$product->title}}</h1>
        <p class="h5">&#8377; <span>{{number_format($product->price)}}</span></p>
        <p>{{$product->description}}</p>
        <a href="{{route('cart.add',$product->id)}}" class="btn btn-primary">Add to cart</a>
    </section>
    </main>
    @endsection