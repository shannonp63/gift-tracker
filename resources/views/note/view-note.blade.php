@extends('layouts.app')

@section('title', 'View Note')

@section('content')
	<div class="row">
		{{$note->name}}</div>
	</div>
	<div class="row">
		{{$note->privacy}}
	</div>
	@if($note->person)
		<div class="row">
			{{$note->person->first_name}} {{$note->person->last_name}}
		</div>
	@endif
	@if($note->event)
		<div class="row">
			{{$note->event->name}} on {{$note->event->event_date_time}}
		</div>
	@endif
	<div class="row">
		{{$note->body}}
	</div>
@endsection