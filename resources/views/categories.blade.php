@extends('layouts.default') 
@section('title', 'Ecom - Products') 
@section('content') 
    <main class="container"> 
        <section> 
            <div class="row"> 
                @foreach ($categories as $category) 
                    <div class="col-12 col-md-6 col-lg-4"> 
                        <img style="width: 250px; height: 250px" src="{{ $category->image }}" alt=""> 
                        <p>{{ $category->title }}</p> 
                    </div> 
                @endforeach 
            </div> 
        </section> 
    </main> 
@endsection