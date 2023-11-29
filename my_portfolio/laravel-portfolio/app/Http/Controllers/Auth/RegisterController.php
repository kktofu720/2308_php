<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

Class RegisterController extends Controller {
	use RegistersUsers;

	protected $redirectTo = RouteServiceProvider::HOME;

	public function __construct() {
		$this->middleware("guest");
	}

	protected function validator(array $data) {
		return Validator::make($data, [
			"name"=> ["required","string",""],
			"u_id" => ["required","string",""],
			"email"=> ["required","string","email","unique:users"],
			"password"=> ["required","string","","confirmed"],
		]);
	}

	protected function create(array $data) {
		return User::create([
			"name"=> $data["name"],
			"u_id" => $data["u_id"],
			"email"=> $data["email"],
			"password"=> Hash::make($data["password"]),
		]);
	}
}