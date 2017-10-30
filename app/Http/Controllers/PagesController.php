<?php

namespace App\Http\Controllers;

class PagesController extends Controller

{

	public function home() 
	{
	    return view('pages.welcome');
	}

	public function about()
	{
		return view('pages.about');
	}

	public function services()
	{
		return view('pages.services');
	}

	public function contact()
	{
		return view('pages.contact');
	}

	// Menus
	public function horsdoeuvres()
	{
		return view('pages.horsdoeuvres');
	}

	public function salads()
	{
		return view('pages.salads');
	}

	public function pans()
	{
		return view('pages.pans');
	}

	public function buffets()
	{
		return view('pages.buffets');
	}

	public function desserts()
	{
		return view('pages.desserts');
	}
}