<?php namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\HomeController;

class UserController extends Controller
{
    
    public function index()
    {
        $claims = DB::select('select * from claims');

       return view('claims', ['claims' => $claims]);
    }
}
        
        