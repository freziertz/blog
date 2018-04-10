<?php

namespace Brainy\Http\Controllers;

use Illuminate\Http\Request;

class PartyController extends Controller
{
	public function index(Request $request)
	{
		return $request->name;
	}
	
    //
}
