<!doctype html>

<head>
	<style>
		.form-group{
			position:relative;
			left:580px;
			bottom:-50px;
			font-weight:bold;
		}
		.text-center{
			position:relative;
			left:495px;
			
			border:5px solid #ec5555;
			
			background-color:white;
		}
		#sub{
			position:relative;
			left:760px;
			bottom:-80px;
		}
	
	</style>
</head>

@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1 class="text-center">Add product to Inventory</h1>
            <form action="{{ route('product.addInventory')}}" method="post">
                <div class="form-group">
                    <label for="store">Store</label>
                    <input type="text" id="store" name="store" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="imagePath">Image Address Link</label>
                    <input type="url" id="imagePath" name="imagePath" class="form-control" formnovalidate="formnovalidate"/>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" id="price" name="price" class="form-control"/>
                </div>
                <button type="submit" class="btn btn-primary" id="sub">Add new product</button>
                {{csrf_field()}}
            </form>
        </div>
    </div>
@endsection
</html>