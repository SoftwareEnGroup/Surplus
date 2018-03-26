<!doctype html>
<head>
	<style>
		.title{
			font-weight:bold;
			text-align:left;
		}
		.ans{
			text-align:left;
		}
	</style>
</head>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">FAQ</div>
                    <div class="card-body" style="width:800px; margin:0 auto; text-align: center;">
						<div class="title">What is Surplus?</div>
						<div class="ans">Surplus is an innovative platform aiming to help tackle food waste.
						Restaurants and supermarkets</br> add their left-over food and produce to the Surplus map.
						Then, users of Surplus can purchase and</br> collect them to prevent food waste.</div>
						</br>
						<div class="title">What food is available?</div>
						<div class="ans">Check out our map of restaurants and supermarkets and explore what food is waiting to
						be</br> collected.</div>
						</br>
						<div class="title">How do I make an order?</div>
						<div class="ans">1. Make an account and log-in.</br>
										 2. Start browsing.</br>
										 3. When you see items you like, add them to your cart.</br>
										 4. Click on 'Shopping Cart', then checkout.</br>
										 5. Fill out your details and submit. </div>
						</br>
						<div class="title">What is the process of collecting?</div>
						<div class="ans">Once you make a purchase, we will send you a conformation email with the exact location of
						the</br> restaurant or shop. You will need to go and collect your items by quoting
						your order number. </div>
						</br>
						<div class="title">When can I pick up my order?</div>
						<div class="ans">Straight-away! Just have on hand your order confirmation email. </div>
						</br>
						<div class="title">What payment methods do you accept?</div>
						<div class="ans">We accept credit/debit cards.</div>
						</br>
						<div class="title">I am a business owner, can I list my surplus food on your map?</div>
						<div class="ans">Yes, simply fill out the 'Contact us' form and one of our Surplus admins will get in
						contact with you</br> about putting your products on the map.</div>
						</br>
						<div class="title">How much does it cost?</div>
						<div class="ans">Using Surplus is free.</br>
						Simply pay for the food you would like to purchase. </br>
						Also, restaurants and shops offer their food at a discounted price on Surplus!</div>
						</br>
						<div class="title">My question is not listed above.</div>
						<div class="ans">Fill out our <a href="/contact" style="display: inline">'Contact us'</a> form and we will get back to you.</div>
					</div>
					
                </div>
            </div>
        </div>
    </div>
@endsection
</html>