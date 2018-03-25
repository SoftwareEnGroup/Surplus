<!doctype html>
<head>
	<style>
		
		.checkout{
			position:relative;
			bottom:20px;
			font-weight:bold;
			font-size:20px;
		}
		.qty{
			position:relative;
			font-weight:bold;
			width:40px;
			height:28px;
			font-size: 15px !important;
		}
		.label{
			font-size:22px !important;
		}
		.list-group-item{
			
			font-size:22px !important;
		}
		#drop{
			background:url("http://www.clker.com/cliparts/1/5/c/4/1245687571372410073Soeb_Plain_Arrow_1.svg.med.png") no-repeat !important;
			background-size:contain !important;
			position:relative;
			left:150px;
			background-size: 50% !important;
			border-radius: 3px solid transparent important!;
			transition: all 0.1s ease-in-out important!;
			width:10px !important;
			height:40px !important;
		}
	
		#checkoutButton{
			position:relative;
			left:785px !important;
		}
		#totalText{
			position:relative;
			left:-35px !important;
			font-weight:bold !important;
			font-size:25px !important;
		}
		#totalAmount{
			position:relative !important;
			left:-35px !important;
			font-weight:bold !important;
			font-size:22px !important;
			left:0px !important;
		}
	</style>
</head>
<body>
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
		<div class="checkout">Checkout</div>
            @foreach((array)$products as $product)
            <li class="list-group-item">
            <span class="qty">{{$product['qty']}}</span>
              <strong>{{$product['item']['title']}}</strong>
              <span class="label label-success" id="price">£{{number_format((float)$product['price'], 2, '.', '')}}</span>
              <div class="btn-group">
                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" id="drop"> <span class="caret"></span>
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
            </li>
            @endforeach
        </ul>
      </div>
    </div>
    <div id="totalRow" class="row">
      <div id="totalContainer" class="">
        <strong id="totalText">Total:</strong>
        <strong id="totalAmount">£{{number_format((float)$totalPrice, 2, '.', '')}}</strong>
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
</body>
</html>