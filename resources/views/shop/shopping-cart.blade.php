@extends('layouts.shoppingCart')
@section('title')
  Laravel Shopping Cart
@endsection
@section('content')
  @if(Session::has('cart'))
  <div class="shoppingCartItems">
    <div class="ProductContainer">
      <div class="">
        <ul class="list-group">
            @foreach((array)$products as $product)
            <li id="products" class="list-group-item">
            <span class="qty">{{$product['qty']}}</span>
              <strong id="price">{{$product['item']['title']}}</strong>
              <div  id="btnDiv"class="btn-group">
                <button type="button"id="optionButt" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                  Options <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']])}}">Reduce by 1</a>
                  </li>
                  <li>
                    <a href="{{ route('product.removeItem', ['id' => $product['item']['id']])}}">Delete Item</a>
                  </li>
                </ul>
              </div>
              <span class="label label-success">£{{$product['price']}}</span>


            </li>
            @endforeach
        </ul>
      </div>
    </div>
    <div id="totalRow" class="row">
      <div id="totalContainer" class="">
        <strong id="totalText">Total:</strong>
        <strong id="totalAmount">£{{$totalPrice}}</strong>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class=""> <!-- col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 /-->
        <a href="{{ route('checkout')}}" type="button" class="btn" id="checkoutButton">Checkout</a> <!-- class="btn btn-success" /-->
      </div>
    </div>
  @else
  <div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <h2>No Items in Cart</h2>
    </div>
  </div>
</div>
  @endif
@endsection
