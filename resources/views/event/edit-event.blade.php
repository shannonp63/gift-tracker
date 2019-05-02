@extends('layouts.app')

@section('title', 'Edit Event')

@section('content')
    <form method="POST" action="route('update_event')">
    	<div class="form-group">
	    	<label for="name">Event Name:</label>
	    	<imput type="text" class="form-control" name="name" id="name" value="{{$event->name}}" />
	    </div>
	    <div class="form-group">
	    	<label for="event_type">Event Type:</label>
	    	<select name="event_type">
	    		@foreach($eventTypes as $eventType)
	    			<option value="{{$eventType}}">{{$eventType}}</option>
	    		@endforeach
	    	</select>
	    </div>
	    <div class="form-group">
	    	<label for="privacy">Privacy:</label>
	    	<select name="privacy">
	    		@foreach($privacyLevels as $privacyLevel)
	    			<option value="{{$privacyLevel}}" {{($event->privacy == $privacyLevel) ? 'selected' : ''}}>{{$privacyLevel}}</option>
	    		@endforeach
	    	</select>
	    </div>
	    <div class="form-group">
	    	<label for="theme">Event Theme:</label>
	    	<imput type="text" class="form-control" name="theme" id="theme" value="{{$event->theme}}" />
	    </div>
	    <div class="form-group">
	    	<label for="event_date_time">Event Date/Time:</label>
	    	<imput type="text" class="form-control datetimepicker" name="event_date_time" id="event_date_time" value="{{$event->event_date_time}}" />
	    </div>
    </form>
@endsection