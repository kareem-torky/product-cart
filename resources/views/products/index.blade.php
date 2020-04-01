@extends('layouts.app')


@section('content')
  <div class="container p-5">
    <div class="row">
      @foreach ($products as $pro)    
        <div class="col-lg-4 mb-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ asset("uploads/$pro->img") }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $pro->name }}</h5>
              <p class="card-text">{{ $pro->price }}</p>
              <a href="{{ route('addToCart', $pro->id) }}" class="btn btn-primary">@lang('front.addtocart')</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

@endsection