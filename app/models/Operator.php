<?php

use Illuminate\Auth\UserInterface;

class Operator extends Eloquent implements UserInterface{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'operators';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

}
