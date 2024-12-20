@extends('layouts.default') 
@section('title', 'Ecom - Products') 
@section('content') 
    <main class="container"> 
        <section> 
            <div class="row"> 
                @foreach ($products as $product) 
                    <div class="col-12 col-md-6 col-lg-4"> 
                        <img style="width: 250px; height: 250px" src="{{ $product->image }}" alt=""> 
                        <p>{{ $product->title }}</p> 
                    </div> 
                @endforeach 
            </div> 
        </section> 
    </main> 
@endsection