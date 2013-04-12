<?php

class AbstractRepository extends Nette\Object
{
	public $database;
	
	
	public function __construct(Nette\Database\Connection $database)
	{
		$this->database = $database;
	}
	
	
	
	
	

	
	
}