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
                    Visit a store by going back to map or select from the drop-down list
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Select Option
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Supermarkets</li>
                            <li><a href="#">Tesco</a></li>
                            <li><a href="#">Sainsbury</a></li>
                            <li><a href="#">Asda</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Restaurants</li>
                            <li><a href="#">Pizza Express</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
