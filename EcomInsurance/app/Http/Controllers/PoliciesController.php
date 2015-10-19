<?php namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\PoliciesController;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $policies = DB::select('select * from policies');

        return view('policies', ['policies' => $policies]);
    }
}