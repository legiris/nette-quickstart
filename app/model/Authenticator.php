<?php

use Nette\Security;

class Authenticator extends AbstractRepository implements Security\IAuthenticator
{
	/**
	 * funkce overi login a heslo, vrati objekt a instanci uzivatele jako pole
	 * @param array $credentials
	 * @return object Nette\Security\Identity
	 */ 
	public function authenticate(array $credentials)
	{	
		$username = $credentials[0];
		$password = $credentials[1];
		
		// inicializace uivatele z DB -- object ActiveRow
		$user = $this->findUser($username);	
		
		if (!$user) {
			throw new Security\AuthenticationException('Zkontrolujte si Vaše uživatelské jméno! Uživatel ' . $username . ' neexistuje.', self::IDENTITY_NOT_FOUND);
		}
		
		if ($user->password !== $this->md5HashPass($password, $user->email)) {
			throw new Security\AuthenticationException('Zkontrolujte si, zda zadáváte správné heslo!', self::INVALID_CREDENTIAL);
		} 
		
		unset($user->password);
		return new Security\Identity($user->id, NULL, $user->toArray());
	}
	
	
	
	/**
	 * TODO: zaradit do UserRepository
	 * funkce vrati instanci uzivatele podle loginu
	 * @param string $username
	 * @return object Nette\Database\Table\ActiveRow
	 */
	public function findUser($username)
	{		
		$user = $this->database->table('user')->where('username = ?', $username)->fetch();
		return $user;
	}
	
	
	/**
	 * funkce vrati heslo jako md5 hash, parametrem je zadane heslo, email uzivatele
	 * @param string $password
	 * @param string $email
	 */
	public function md5HashPass($password, $email)
	{
		$password = $email . $password . '81470c733e07d0f14f245e0bff177d94';
		return md5($password);
	}
	
	
	
	/** NOT IMPLEMENTED
	 * 
	 * funkce vrati heslo jako md5 hash, parametrem je zadane heslo, email uzivatele a delka nahodne vygenerovaneho retezce
	 * @param string $password
	 * @param string $email
	 * @param int $length
	 * public function md5HashPass($password, $email, $length)
	 * {
	 * $password = $email . $password . $this->randomString($length);
	 * return md5($password);
	 * }
	 
	
	 * funkce vygeneruje nahodny retezec znaku
	 * @param int $length
	
		public function randomString($length)
		{
			$string = '';
			$chars = 'ABCDEFGHIJKLMNOPQRSTUVXYZabcdefghijklmnopqrstuvwxyz0123456789';
		
			for ($i = 0; $i <= $length; $i++)
			{
			$charPosition = rand(0, strlen($chars));
			$string .= substr($chars, $charPosition, 1);
			}
			return $string;
		}
	 
	 /**
	 * funkce vrati heslo podle loginu uzivatele
	 * @param string $username
	 
	public function fetchPassword($username)
	{
		$row = $this->database->table('user')->where('username = ?', $username)->fetch();
		return $row->password;
	} 
	 
	 */
	
	
}