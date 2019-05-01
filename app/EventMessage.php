<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class EventMessage extends Model {
	protected $table = 'event_messages';
	protected $attributes = ['subject', 'body', 'person_id', 'event_id', 'reply_message'];
	protected $fillable = ['subject', 'body', 'person_id', 'event_id', 'reply_message'];
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