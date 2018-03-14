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

            #mapid {
                height: 500px;
                width: 1000px;
            }
        </style>
    </head>
    <body>
        <a class="fixed-top" href="#">
            <img src="images/header.png" height="30" alt="Surplus Logo">
        </a>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-success">
                                <div class="panel-heading">Map of Locations</div>
                                <div id="mapid"></div>
                                @if(Auth::check())
                                    <script>
                                        var mymap = L.map('mapid').setView([51.5074, 0.1278], 13);
                                        <?php foreach($characters as $key => $value):
                                            $pieces = explode(",", $value);?>
                                        var marker = L.marker([<?php echo $pieces[1]; ?>, <?php echo $pieces[2]; ?>]).addTo(mymap);
                                        marker.bindPopup("<b><?php echo $key; ?></b><br><?php echo $pieces[0]; ?><a href='/products'> Click here</a>").openPopup();
                                        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                                            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
                                        }).addTo(mymap);
                                        <?php endforeach; ?>
                                    </script>
                                @endif
                            </div>
                              <div class="panel panel-default">
                                @if(Auth::guest())
                                <div class="panel-body"><a href="/login" class="btn btn-info"> You need to login to see the the Map 😜😜</a></div>
                                @endif
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
