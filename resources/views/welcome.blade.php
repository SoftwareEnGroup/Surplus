
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Surplus</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Leaflet map-->
         <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
           integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
           crossorigin=""/>
         <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
            integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;

                margin: 0;
                background-image: url(/images/BG.png);
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
            }

            h1{
              color: #ec5555;
              text-align: center;
              font-family: calibri, sans-serif;
              padding: 0;
              display: inline-block;
              font-size: 50px;
            }
            h2{
              color: #ec5555;
              text-align: center;
              font-family: calibri, sans-serif;
              padding: 0;
              display: inline-block;
              font-size: 30px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .panel{
                background-color: white;
                padding: 15px;
                color: black;
            }

            #header{

              width:200px;
              left:50%;
              margin-left: -100px;
              position: fixed;
              margin-top: 10px;
              margin-bottom: 10px;

            }

            #mapid {
                height: 500px;
                width: 1000px;
            }

            #fakeMap{

              height: 500px;
              width: 1000px;
              position: fixed;
              left: 50%;
              margin-left: -500px;
              top: 50%;
              margin-top: -180px;

            }

            #fakeMapOverlay{

              height: 500px;
              width: 1000px;
              position: fixed;
              left: 50%;
              margin-left: -500px;
              top: 50%;
              margin-top: -180px;
              background: rgba(255, 255, 255, 0.7);
              z-index: 1;
              -webkit-animation-name: appear; /* Safari 4.0 - 8.0 */
              -webkit-animation-duration: 2s; /* Safari 4.0 - 8.0 */
              -webkit-animation-iteration-count: 1; /* Safari 4.0 - 8.0 */
              animation-name: appear;
              animation-duration: 2s;
              animation-iteration-count: 1;

            }

            #ani{

              -webkit-animation-name: txtAppear; /* Safari 4.0 - 8.0 */
              -webkit-animation-duration: 2s; /* Safari 4.0 - 8.0 */
              -webkit-animation-iteration-count: 1; /* Safari 4.0 - 8.0 */
              animation-name: txtAppear;
              animation-duration: 2s;
              animation-iteration-count: 1;

            }

            #buttons{
			  position:relative;
              color: white;
              background-color: #ec5555;
              padding-top: 10px;
              padding-bottom: 10px;
			  bottom:57px;
			  left:-316px !important;

            }
			
			 #home{
			  position: relative;
              color: white;
              background-color: #ec5555;
              padding-top: 10px;
              padding-bottom: 10px;
			  left:-316px;
			  bottom:57px;
            }
			
			#map-text{
				position:relative;
				bottom:-20px;
				color:black;
				font-weight:bold;
			}
			
			#topNav{
				position:relative;
				border: transparent;
				background-color:white;
				width:1753px;
				height:60px;
				border-radius: 3px solid transparent;
			}
	
            
			/* Safari 4.0 - 8.0 */
            @-webkit-keyframes appear {
                0%   {background: rgba(255, 255, 255, 0.0);}
                100%  {background: rgba(255, 255, 255, 0.7);}
              }

            /* Standard syntax */
            @keyframes appear {
              0%   {background: rgba(255, 255, 255, 0.0);}
              100%  {background: rgba(255, 255, 255, 0.7);}
            }

            /* Safari 4.0 - 8.0 */
            @-webkit-keyframes txtAppear {
                0%   {opacity: 0.0;}
                100%  {opacity: 1;}
              }

            /* Standard syntax */
            @keyframes txtAppear {
              0%   {opacity: 0.0;}
              100%  {opacity: 1;}
            }
			
        </style>
    </head>
    <body>
	 <div id="topNav" class="row">
        <a  class="fixed-top" href="#">
            <img id="header" src="images/header.png" alt="Surplus Logo">
        </a>
		</div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a id="home" href="{{ url('/home') }}">Home</a>
                    @else
                        <a id="buttons" href="{{ route('login') }}">Login</a>
                        <a id="buttons" href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-success">

                                <div id="mapid"></div>
                                @if(Auth::check())
                                <div class="panel-heading" id="map-text">Map of Locations</div>
                                    <script>
                                        var mymap = L.map('mapid').setView([51.5074, 0.1278], 13);
                                        <?php foreach($characters as $key => $value):
                                            $pieces = explode(",", $value);?>
                                        var marker = L.marker([{{$pieces[1]}}, {{$pieces[2]}}]).addTo(mymap);
                                        marker.bindPopup("<b>{{$key}}</b><br>{{$pieces[0]}}<a href='/products?var={{$key}}'> Click here</a>").openPopup();
                                        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                                            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
                                        }).addTo(mymap);
                                        <?php endforeach; ?>
                                    </script>
                                @endif
                            </div>
                              <div class="panel panel-default">
                                @if(Auth::guest())
                                <div class="panel-body">

                                  <div id="fakeMapOverlay">

                                    <h1 id="ani">Welcome to Surplus!</h1>
                                    <div >
                                    <a href="/login" id="ani" class="btn btn-info"><h2 id="ani" >Click here to login </h2></a>
                                    </div>

                                  </div>

                                  </div>
                                  <img id="fakeMap" src="images/map.png" >


                                @endif
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
