<?php

namespace App\Http\Controllers;

/**
* index controller
*/
class IndexController extends Controller
{
	public function index()
	{
		return view('pages.welcome');
	}
}