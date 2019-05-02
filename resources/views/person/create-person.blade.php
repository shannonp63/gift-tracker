@extends('layouts.app')

@section('title', 'Add Person')

@section('content')
    <form method="POST" action="route('store_person')">
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
	    	<label for="wish_list_url">Wish List URL:</label>
	    	<imput type="text" class="form-control" name="wish_list_url" id="gift_list_id" />
	    </div>
    	<div class="form-group">
	    	<label for="birth_date">Birth Date:</label>
	    	<imput type="text" class="form-control datetimepicker" name="birth_date" id="birth_date" />
	    </div>
    	<div class="form-group">
	    	<label for="anniversary">Anniversary:</label>
	    	<imput type="text" class="form-control datetimepicker" name="anniversary" id="anniversary" />
	    </div>
    	<div class="form-group">
	    	<label for="shirt_size">Shirt Size:</label>
	    	<select class="form-control" name="shirt_size" id="shirt_size">
	    		<option value="Small">Small</option>
	    		<option value="Medium">Medium</option>
	    		<option value="Large">Large</option>
	    		<option value="X-Large">X-Large</option>
	    		<option value="XX-Large">XX-Large</option>
	    	</select>
	    </div>
    	<div class="form-group">
	    	<label for="pant_size">Pant Size:</label>
	    	<imput type="text" class="form-control" name="pant_size" id="pant_size" />
	    </div>
    	<div class="form-group">
	    	<label for="shoe_size">Shoe Size:</label>
	    	<select class="form-control" name="shirt_size" id="shirt_size">
	    		<option value="6">6</option>
	    		<option value="6.5">6.5</option>
	    		<option value="7">7</option>
	    		<option value="7.5">7.5</option>
	    		<option value="8">8</option>
	    		<option value="8.5">8.5</option>
	    		<option value="9">9</option>
	    		<option value="9.5">9.5</option>
	    		<option value="10">10</option>
	    		<option value="10.5">10.5</option>
	    		<option value="11">11</option>
	    		<option value="11.5">11.5</option>
	    		<option value="12">12</option>
	    		<option value="12.5">12.5</option>
	    		<option value="13">13</option>
	    		<option value="13.5">13.5</option>
	    	</select>
	    </div>
    </form>
@endsection

<script>
	$('.datetimepicker').datetimepicker({
	    format: 'yyyy-mm-dd hh:ii'
	});

</script>