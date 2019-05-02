<div class="row">
@foreach($person->getWishList() as $listItem)
	<div class="row">
		<div class="col-lg-4">
			<img src="{{$listItem['picture']}}" />
		</div>
		<div class="col-lg-8">
			<div class="row">Name: {{$listItem['name']}}</div>
			<div class="row">Link: {{$listItem['link']}}</div>
			<div class="row">Price: {{$listItem['new-price']}}</div>
		</div>
@endforeach
</div>