<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonToPersonRelationship extends Model {
	protected $table = 'person_to_person_relationship';
	protected $attributes = ['initiating_person_id', 'relation_person_id', 'relationship', 'relation_person_approval'];
	protected $fillable = ['initiating_person_id', 'relation_person_id', 'relationship', 'relation_person_approval'];
	public $softdeletes = true;

	public function initiating_person()
	{
		return $this->hasOne('App\Person', 'id', 'initiating_person_id');
	}

	public function relation_person()
	{
		return $this->hasOne('App\Person', 'id', 'relation_person_id');
	}
}