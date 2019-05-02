@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
	<div class="row">
		<div class="row">
			<h2>Upcoming Events</h2>
		</div>
		<div class="row">
			@foreach($upcomingEvents as $event)
				<a href="{{route('event_page',$event->id)}}">
					<div class="row">
						<div class="col-lg-4">{{$event->name}}</div>
						<div class="col-lg-8">{{$event->event_date_time}}</div>
					</div>
					<div class="row">
						<div class="col-lg-6">{{$event->event_type}}</div>
						<div class="col-lg-6">{{$event->theme}}</div>
					</div>
				</a>
			@endforeach
		</div>
	</div>

	<div class="row">
		<h2>Event Messages</h2>
		@foreach($eventMessages as $eventMessage)
			<a href="{{route('event_message',$eventMessage->id)}}">
				<div class="row">
					<div class="col-lg-6">From: {{$eventMessage->person->first_name}} {{$eventMessage->person->last_name}}</div>
					<div class="col-lg-6">Event: {{$eventMessage->event->name}}</div>
				</div>
				<div class="row">
					Subject: {{$eventMessage->subject}}
				</div>
			</a>
		@endforeach
	</div>

	<div class="row">
		<h2>Notes</h2>
		@foreach($notes as $note)
			<a href="{{route('view_note',$note->id)}}">
				<div class="row">
					@if($note->person)
						<div class="col-lg-6">From: {{$note->person->first_name}} {{$note->person->last_name}}</div>
					@endif
					@if($note->event)
						<div class="col-lg-6">Event: {{$note->event->name}}</div>
					@endif
				</div>
				<div class="row">
					Subject: {{$note->name}}
				</div>
			</a>
		@endforeach
	</div>

@endsection