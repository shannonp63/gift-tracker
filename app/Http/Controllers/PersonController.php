<?php

namespace App\Http\Controllers;

use App\Person;

class PersonController extends Controller
{

	public function view($id)
	{
		return view('person.view-person', ['person' => Person::findOrFail($id)]);
	}

    public function create()
    {
    	return view('person.create-person', []);
    }

    public function edit($id)
    {
    	return view('person.edit-person', ['person' => Person::findOrFail($id)]);
    }

}
