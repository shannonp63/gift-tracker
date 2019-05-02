@extends('layouts.app')

@section('title', 'View Event')

@section('content')
	<div class="row">
		{{$event->name}}</div>
	</div>
	<div class="row">
		{{$event->event_type}}
	</div>
	<div class="row">
		{{$event->theme}}
	</div>
	<div class="row">
		{{$event->event_date_time}}
	</div>
	@foreach($event->attendees as $person)
		<div class="row">
			{{$person->first_name}} {{$person->last_name}}
		</div>
	@endforeach
@endsection