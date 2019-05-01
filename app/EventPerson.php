<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class EventPerson extends Model {
	protected $table = 'event_person';
	protected $attributes = ['event_id', 'person_id', 'host', 'admin', 'attending'];
	protected $fillable = ['event_id', 'person_id', 'host', 'admin', 'attending'];
	public $softdeletes = true;

}