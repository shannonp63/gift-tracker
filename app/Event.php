<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {
	protected $table = 'events';
	protected $attributes = [
		'name', 
		'event_type', 
		'privacy', 
		'theme', 
		'event_date_time'
	];
	protected $fillable = [
		'name', 
		'event_type', 
		'privacy', 
		'theme', 
		'event_date_time'
	];
	public $softdeletes = true;

	public function host()
	{
		return $this->attendees->where('host', true)->first();
	}

	public function attendees()
	{
		return $this->hasManyThrough(
			'App\Person',
            'App\EventPerson',
            'event_id',
            'id', 
            'id', 
            'person_id' 
		);
	}
}