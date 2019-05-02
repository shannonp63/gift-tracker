@extends('layouts.app')

@section('title', 'Add Event Message')

@section('content')
    <form method="POST" action="route('store_message')">
    	<div class="form-group">
	    	<label for="subject">Message Subject:</label>
	    	<imput type="text" class="form-control" name="subject" id="subject" />
	    </div>
	    <div class="form-group">
	    	<label for="person_id">Person:</label>
	    	<select name="person_id">
	    		<option value="0">Select an Attendee</option>
	    		@foreach($event->attendees as $person)
	    			<option value="{{$person->id}}">{{$person->first_name}} {{$person->last_name}}</option>
	    		@endforeach
	    	</select>
	    </div>
	    <div class="form-group">
	    	<label for="body">Message Body:</label>
	    	<imput type="textarea" class="form-control" name="body" id="body" />
	    </div>
    </form>
@endsection