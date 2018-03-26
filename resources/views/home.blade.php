<!doctype html>
<head>
	<style>
		#add{
			color:black;
			left:280px;
			position:relative;
			border:1px solid black;
			width:100px;
		}
		#add:hover{
			color:white;
		}
	
	</style>
</head>
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body" style="width:800px; margin:0 auto; text-align: center;">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::user()->name == 'Admin')
                            <a href="/add-product" id="add">Add Products</a>
                     @else
                    Visit a store by going back to map or select from the drop-down list
                    <div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">Select Option
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Supermarkets</li>
                            <li><a href="/products?var=Tesco">Tesco</a></li>
                            <li><a href="/products?var=Sainsbury">Sainsbury</a></li>
                            <li><a href="#">Asda</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Restaurants</li>
                            <li><a href="#">Pizza Express</a></li>
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</html>