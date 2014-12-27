<?php

class EndpointGroup extends Eloquent {

	protected $fillable = ['name', 'description'];

	public static $rules = [

		'name' => 'required',
		'description' => 'required'

	];

	public $errors;

	public function isValid()
	{
		$validation = Validator::make( $this->attributes, static::$rules );

		if ( $validation->passes() ) return true;

		$this->errors = $validation->messages();

		return false;
	}

}