@extends('layouts.app')

@section('title', 'Add User')

@section('content')
    <form method="POST" action="route('store_user')">
    	@csrf
    	<div class="form-group">
	    	<label for="first_name">First Name:</label>
	    	<imput type="text" class="form-control" name="first_name" id="first_name" />
	    </div>
    	<div class="form-group">
	    	<label for="last_name">Last Name:</label>
	    	<imput type="text" class="form-control" name="last_name" id="last_name" />
	    </div>
    	<div class="form-group">
	    	<label for="email_address">Email address:</label>
	    	<imput type="text" class="form-control" name="email_address" id="email_address" />
	    </div>
    	<div class="form-group">
	    	<label for="password">Password:</label>
	    	<imput type="password" class="form-control" name="password" id="password" />
	    </div>
	    <div class="form-group">
	    	<label for="confirm-password">Confirm Password:</label>
	    	<imput type="password" class="form-control" name="confirm-password" id="confirm-password" />
	    </div>
    </form>
@endsection