@extends('layouts.app')

@section('title', '{{$person->first_name}} {{$person->last_name}}')

@section('content')
	<div class="row">
		<div class="col-lg-4">
			<div class="row">
				<div class="col-lg-6">{{$person->first_name}}</div>
				<div class="col-lg-6">{{$person->last_name}}</div>
			</div>
			<div class="row">
				<div class="col-lg-6">{{$person->email_address}}</div>
				<div class="col-lg-6">{{$person->wish_list_url}}</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="row">
				{{$person->birth_date}}
			</div>
			<div class="row">
				{{$person->anniversary}}
			</div>
		</div>
		<div class="col-lg-4">
				<div class="row">{{$person->shirt_size}}</div>
				<div class="row">{{$person->pant_size}}</div>
				<div class="row">{{$person->email_address}}</div>
		</div>
	</div>
	<div class="row">
		@include('person.wislist')
	</div>
@endsection