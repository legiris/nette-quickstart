<?php

class ProjectRepository extends AbstractRepository
{
	/**
	 * funkce vyvere vsechny projekty a vrati je jako objekt
	 * return object
	 */
	public function fetchAll()
	{		
		return $this->database->table('project')->order('id DESC');	
	}
	
	
	/**
	 * vybere radek z databaze, funkce find() vrati pole, fetch() jeden radek
	 * @param int $id
	 * return row
	 */
	public function loadByID($id)
	{
		return $this->database->table('project')->find($id)->fetch();	
	}
	
}