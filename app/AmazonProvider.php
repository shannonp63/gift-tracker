<?php
namespace App;

use App\Person;

class AmazonProvider {
	
	public function __construct($wishlistUrl)
	{
		$_GET['id'] = $wishlistUrl;
		$json = include('../vendor/doitlikejustin/amazon-wish-lister/src/wishlist.php');
		return $json;
	}
}