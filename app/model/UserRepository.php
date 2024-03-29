<?php

class UserRepository extends AbstractRepository
{
	
	/**
	 * TODO: value u option
	 * funkce pripravi pole pro addSelect a vrati asociativni pole, jednotlive sloupce oddeleny ':'
	 * @return array
	 */
	public function fetchAddSelect()
	{
		//$users = $this->database->table('user')->order('surname')->fetchPairs('id','surname');
		
		$users = $this->database->table('user')->order('lastname');
		$names = array();
		
		foreach ($users as $user)
		{
			$names[$user->id] = $user->lastname . ' ' . $user->firstname;
		}
		return $names;
	}
	
	
	/**
	 * funkce vybere vsechny zaznamy a vrati je jako objekt
	 * @return \Nette\Database\Table\Selection
	 */
	public function fetchAll()
	{
		$users = $this->database->table('user');
		
		return $users;	
	}
	
	
	public function insert($username, $firstname, $lastname, $email, $password)
	{
		$user = $this->database->table('user')->insert(array(
			'username' 	=> $username,
			'firstname' => $firstname,
			'lastname'	=> $lastname,
			'email'		=> $email,
			'password'	=> $password
		));
	}
	
	
}