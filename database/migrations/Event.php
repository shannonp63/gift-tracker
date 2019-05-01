<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {
	protected $table = 'events';
	protected $attributes = ['name', 'event_type', 'privacy', 'theme', 'event_date_time'];
	protected $fillable = ['name', 'event_type', 'privacy', 'theme', 'event_date_time'];
	public $softdeletes = true;

	public function notes()
	{
		return $this->hasMany('App\Note');
	}

	public function messages()
	{
		return $this->hasMany('App\EventMessage');
	}

	public function attendees()
	{
		return $this->hasManyThrough(
			'App\Person',
			'App\EventPerson',
			'event_id', #event_person.event_id
			'id', #people.id
			'id'
		);
	}
}