@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Uren</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('hours.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($hour, ['method' => 'PATCH','route' => ['hours.update', $hour->id]]) !!}
        @include('hours.form')
    {!! Form::close() !!}
@endsection