<?php
	namespace App\Http\Controllers\Auth;
	use App\Http\Controllers\Controller;
	use Illuminate\Foundation\Auth\AuthanticatesUsers;
	class LoginController extends Controller
	{
		use AuthanticatesUsers;
		protected $redirectTo = '/home';
		public function __construct()
		{
			$this->middleware('guest')->except('logout');
		}
	}
	
?>