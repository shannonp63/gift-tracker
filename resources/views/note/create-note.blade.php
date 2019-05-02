@extends('layouts.app')

@section('title', 'Add Note')

@section('content')
    <form method="POST" action="route('store_note')">
    	<div class="form-group">
	    	<label for="name">Note Name:</label>
	    	<imput type="text" class="form-control" name="name" id="name" />
	    </div>
	    <div class="form-group">
	    	<label for="privacy">Privacy:</label>
	    	<select name="privacy">
	    		@foreach($privacyLevels as $privacyLevel)
	    			<option value="{{$privacyLevel}}">{{$privacyLevel}}</option>
	    		@endforeach
	    	</select>
	    </div>
	    <div class="form-group">
	    	<label for="body">Note Body:</label>
	    	<imput type="textarea" class="form-control" name="body" id="body" />
	    </div>
    </form>
@endsection