<?php
	namespace App;
	use Illuminate\Notifications\Notifiable;
	use Illuminate\Foundation\Auth\User as Authanticatable;
	class User extends Authanticatable
	{
		use Notifiable;
		protected $fillable = ['name','email','password',];
		protected $hidden = ['password','remember_token',];
	}
?>