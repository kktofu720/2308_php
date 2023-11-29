<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

Class LoginController extends Controller {
	use AuthenticatesUsers;

	protected $redirectTo = RouteServiceProvider::HOME;

	public function __construct() { 
		$this->middleware("guest")->except("logout");
	}

	public function username() {
		return "u_id";
	}
}

