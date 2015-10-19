<?php namespace App\Http\Controllers;

class IndexController extends Controller {
use DB;
	
	public function __construct()
	{
		//$this->middleware('auth');
	}

	
	public function index()
	{
            $quotes=DB::select('select * from quotes');
            return view('quotes', ['quotes'=>$quotes]);
	}

}
