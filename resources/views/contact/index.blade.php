<!doctype html>
<head>
	<style>
		#FAQ{
			color:#ec5555;
			left:280px;
			position:relative;
			border:3px solid #ec5555;
			width:100px;
			height:30px;
			font-weight:bold;
			font-size:18px;
			font-family: arial,sans-serif;
		}
		#FAQ:hover{
			color:white;
		}
		#Contact{
			bottom:-10px;
			color:#ec5555;
			left:234px;
			position:relative;
			border:3px solid #ec5555;
			width:200px;
			height:30px;
			font-family: arial,sans-serif;
			font-weight:bold;
			font-size:18px;
			
		}
		#Contact:hover{
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
                        <a href="/faq" id="FAQ">FAQ</a>
                        <a href="/contact" id="Contact">Contact Us Form</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
</html>