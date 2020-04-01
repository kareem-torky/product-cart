@extends('layouts.app')


@section('content')
  <div class="container p-5">
      @foreach ($products as $pro)
          <p>{{ $pro->name }}</p>
      @endforeach
  </div>


  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <form action="{{ route('checkout') }}" method="post">
          @csrf 

          <div class="form-group">
            <label for="exampleInputPassword1">@lang('front.name')</label>
            <input type="text" name="name" class="form-control">
          </div>
      
          <div class="form-group">
            <label for="exampleInputEmail1">@lang('front.email')</label>
            <input type="email" class="form-control" name="email">
          </div>
          
          <button type="submit" class="btn btn-primary">@lang('front.checkout')</button>
        </form>
      </div>
    </div>
  </div>

@endsection