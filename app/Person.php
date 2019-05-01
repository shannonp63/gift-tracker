<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model {
	protected $table = 'people';
	protected $attributes = ['first_name', 'last_name', 'email_address', 'gift_list_id', 'birth_date', 'anniversary', 'shirt_size', 'pant_size', 'shoe_size'];
	protected $fillable = ['first_name', 'last_name', 'email_address', 'gift_list_id', 'birth_date', 'anniversary', 'shirt_size', 'pant_size', 'shoe_size'];
	public $softdeletes = true;

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