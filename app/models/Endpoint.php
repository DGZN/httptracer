<?php

class Endpoint extends Eloquent {

	protected $fillable = ['name', 'uri'];

	public static $rules = [

		'name' => 'required',
		'uri' => 'required'

	];

	public $errors;

	public function withTraces()
	{
		die(json_encode(var_dump($this)));
	}

	public function isValid()
	{
		$validation = Validator::make( $this->attributes, static::$rules );

		if ( $validation->passes() ) return true;

		$this->errors = $validation->messages();

		return false;
	}

}