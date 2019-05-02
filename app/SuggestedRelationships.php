<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class SuggestedRelationships extends Model {
	protected $table = 'suggested_relationships';
	protected $attributes = [
		'first_person_id', 
		'second_person_id', 
		'reason'
	];
	protected $fillable = [
		'first_person_id', 
		'second_person_id', 
		'reason'
	];
	public $softdeletes = true;

	public function first_person()
	{
		return $this->hasOne('App\Person', 'id', 'first_person_id');
	}

	public function second_person()
	{
		return $this->hasOne('App\Person', 'id', 'second_person_id');
	}
}