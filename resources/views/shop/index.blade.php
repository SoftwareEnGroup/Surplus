@extends('layouts.app')
@section('title')
  Laravel Shopping Cart
@endsection
@section('content')
@if(Session::has('success'))
<div class="row">
  <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
    <div id="charge-message" class="alert alert-success">
      {{Session::get('success')}}
    </div>
  </div>
</div>
@endif
  @foreach($products->chunk(3) as $productChunk)
  <div class="row">
    @foreach($productChunk as $product)
    <div class="col-sm-6 col-md-4">
      <div class="container" style="margin-top: 20px;">
      <div class="card">
        <!--Card image-->
        <div class="view overlay">
          <img src="{{$product->imagePath}}" class="img-fluid" alt="">
          <a href="#">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!--Card content-->
        <div class="card-body">
          <!--Title-->
          <h4 class="card-title">{{$product->title}}</h4>
          <!--Text-->
          <p class="card-text">{{$product->description}}</p>
          ${{$product->price}}
            <a href="{{route('product.addToCart', ['id' => $product->id])}}" class="btn btn-success pull-right" role="button">
              <i class="fa fa-plus" aria-hidden="true"></i>
              Add to Cart
            </a>
        </div>
      </div>
      </div>
    </div>
    @endforeach
  </div>
  @endforeach
@endsection
<script>
    $.material.init();
</script>
