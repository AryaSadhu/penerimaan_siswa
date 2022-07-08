
@extends('layouts.main')
@section('container')

    <h5 class="mb-5" style="font-size: 32px ">Post Categories</h5>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/blog?category={{ $category->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500/?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overplay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                       
                        
                    </div>
                </div>
            </a>
            </div>
            @endforeach
        </div>
    </div>
   
    
    @endsection
    
    

