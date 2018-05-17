@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Urenregistratie</h2>
                <h2>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('hours.create') }}"> Uren toevoegen</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
	
	
	<div class="col-lg-12">
    <table class="table table-bordered">
        <tr>
            <th>Week:</th>
            <th>Opdrachtnummer</th>
            <th>Opmerking</th>
            <th>Totaal uren</th>
            <th>Resterende uren</th>
            <th>maandag</th>
            <th>dinsdag</th>
            <th>woensdag</th>
            <th>donderdag</th>
            <th>vrijdag</th>
            <th width="280px">Operation</th>
        </tr>
    @foreach ($hours as $hour)
    <tr>

        <td>{{ $hour->name}}</td>
		<td>{{ $hour->uren}}</td>
        <td>{{ $hour->email}}</td>
        <td>{{ $hour->totaaluren}}</td>
        <td>{{ $hour->resterendeuren}}</td>
        <td>{{ $hour->maandag}}</td>
        <td>{{ $hour->dinsdag}}</td>
        <td>{{ $hour->woensdag}}</td>
        <td>{{ $hour->donderdag}}</td>
        <td>{{ $hour->vrijdag}}</td>

        <td>
            <a class="btn btn-info" href="{{ route('hours.show',$hour->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('hours.edit',$hour->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['hours.destroy', $hour->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
	</div>

    {!! $hours->render() !!}
@endsection