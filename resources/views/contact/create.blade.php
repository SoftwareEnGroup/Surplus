@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card text-white bg-warning mb-3">
        <div class="card-body">
            <h3 class="card-title">Contact Form</h3>
            {!! Form::open(['route' => 'contact.store']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Your Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'E-mail Address') !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::textarea('msg', "Message...", ['class' => 'form-control']) !!}
            </div>

            <a href="/home" class="btn btn-info">Submit</a>
            {{--!! Form::submit('Submit', ['class' => 'btn btn-info']) !!--}}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection