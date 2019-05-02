@extends('layouts.app')

@section('title', 'Edit Event Message')

@section('content')
    <form method="POST" action="route('update_message')">
    	<div class="form-group">
	    	<label for="subject">Message Subject:</label>
	    	<imput type="text" class="form-control" name="subject" id="subject" value="{{$eventMessage->subject}}" />
	    </div>
	    <div class="form-group">
	    	<label for="person_id">Person:</label>
	    	<select name="person_id">
	    		<option value="0">Select an Attendee</option>
	    		@foreach($event->attendees as $person)
	    			<option value="{{$person->id}}" {{($note->person_id == $person->id) ? 'selected' : ''}}>{{$person->first_name}} {{$person->last_name}}</option>
	    		@endforeach
	    	</select>
	    </div>
	    <div class="form-group">
	    	<label for="body">Message Body:</label>
	    	<imput type="textarea" class="form-control" name="body" id="body" value="{{$eventMessage->body}}" />
	    </div>
    </form>
@endsection