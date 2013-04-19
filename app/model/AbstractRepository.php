<?php

class AbstractRepository extends Nette\Object //implements Security\IAuthenticator
{
	protected $database;
	
	
	public function __construct(Nette\Database\Connection $database)
	{
		$this->database = $database;
	}
	
	
}