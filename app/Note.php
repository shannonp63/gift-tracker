<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model {
	protected $table = 'notes';
	protected $attributes = [
		'name', 
		'body', 
		'privacy', 
		'person_id', 
		'owner_id', 
		'event_id'
	];
	protected $fillable = [
		'name', 
		'body', 
		'privacy', 
		'person_id', 
		'owner_id', 
		'event_id'
	];
	public $softdeletes = true;

	public function event()
	{
		return $this->hasOne('App\Event', 'event_id');
	}

	public function person()
	{
		return $this->hasOne('App\Person', 'person_id');
	}
}