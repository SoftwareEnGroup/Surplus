@extends('layouts.profile')
@section('content')

<div class="row">
  <div id="profileContainer">
    <h1 id="usrProf">User Profile</h1>
    <hr>
    <h2 id="usrHis">Your Order History:</h2>
  @foreach($orders as $order)
      <div class="panel panel-default">
        <div class="panel-body">
          <ul class="list-group">
            @foreach((array)$order->cart->items as $item)
            <li class="list-group-item">
              <span class="badge">£{{number_format((float)$item['price'], 2, '.', '')}}</span>
              {{$item['item']['title']}} | {{$item['qty']}} Units
            </li>
            @endforeach
          </ul>
        </div>
        <div class="panel-footer">
          <strong>Total Price: £{{number_format((float)$order->cart->totalPrice, 2, '.', '')}}</strong>
        </div>
      </div>
      @endforeach
    
  </div>
</div>
@endsection
