<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AmazonProvider;

class Person extends Model {
	protected $table = 'people';
	protected $attributes = [
		'first_name', 
		'last_name', 
		'email_address', 
		'wish_list_url', 
		'birth_date', 
		'anniversary', 
		'shirt_size', 
		'pant_size', 
		'shoe_size'
	];
	protected $fillable = [
		'first_name', 
		'last_name', 
		'email_address', 
		'wish_list_url', 
		'birth_date', 
		'anniversary', 
		'shirt_size', 
		'pant_size', 
		'shoe_size'
	];
	public $softdeletes = true;

	public function getWishListIdFromUrl()
	{
		$url = $this->wish_list_url;
		$urlPos = strrpos($url, 'wishlist/ls/');
		$firstClip = substr($url, $urlPos+12);
		$firstClipPos = strrpos($firstClip, '/');
		$secondClip = substr($firstClip, 0, $firstClipPos);
		return $secondClip;

	}

	public function getWishList()
	{
		$wishlistId = $this->getWishListIdFromUrl();
		if ($wishlistId) {
			if ($wishlistJson = new AmazonProvider($id)) {
				$wislistArray = json_decode($wishlistJson, true);
			}
		}
		return (isset($wislistArray)) ?  $wislistArray : [];
	}

	public function get_all_relations()
	{
		$relations = new Collection();
		$relations->merge($this->initiating_relations);
		$relations->merge($this->relation_relations);
		return $relations;
	}

	public function initiating_relations()
	{
		return $this->hasOne('App\PersonToPersonRelationship', 'initiating_person_id', 'id');
	}

	public function relation_relations()
	{
		return $this->hasOne('App\PersonToPersonRelationship', 'relation_person_id', 'id');
	}
}