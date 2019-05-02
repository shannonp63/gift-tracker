@extends('layouts.app')

@section('title', 'View Message')

@section('content')
	<div class="row">
		{{$eventMessage->subject}}</div>
	</div>
	@if($eventMessage->person)
		<div class="row">
			{{$eventMessage->person->first_name}} {{$eventMessage->person->last_name}}
		</div>
	@endif
	@if($eventMessage->event)
		<div class="row">
			{{$eventMessage->event->name}} on {{$eventMessage->event->event_date_time}}
		</div>
	@endif
	<div class="row">
		{{$eventMessage->body}}
	</div>
@endsection