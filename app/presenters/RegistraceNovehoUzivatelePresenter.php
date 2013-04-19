<?php

use Nette\Application\UI\Form;

class RegistraceNovehoUzivatelePresenter extends BasePresenter
{
	
	/**
	 * komponenta pro zobrazení formulare
	 */
	public function createComponentRegisterForm()
	{
		$form = new Form();
		
		$form->addText('username', 'Uživatelské jméno:', 30, 100);
		$form->addText('firstname', 'Jméno:', 30, 200);
		$form->addText('lastname', 'Příjmení:', 30, 200);
		$form->addText('email', 'E-mail', 30, 100);
		$form->addPassword('password', 'Heslo:', 30, 50);
		$form->addPassword('checkPassword', 'Ověření hesla:', 30, 50);
		$form->addSubmit('register', 'Zaregistrovat');
		
		$form->onSuccess[] = callback($this, 'registerFormSubmitted');
		//$form->onSuccess[] = $this->registerFormSubmitted;
		
		return $form;
	}
	
	
	/**
	 * funkce vrati heslo jako md5 hash, parametrem je zadane heslo, email uzivatele a delka nahodne vygenerovaneho retezce
	 * @param string $password
	 * @param string $email
	 * @param int $length
	 */
	public function md5HashPass($password, $email)
	{
		$password = $email . $password . '81470c733e07d0f14f245e0bff177d94';
		return md5($password);
	}
	
	
	/**
	 * funkce po uspesnem odeslani formulare vlozi noveho uzivatele
	 */
	public function registerFormSubmitted(Form $form)
	{
		$values = $form->getValues();
		
		if ($form->values->password != $form->values->checkPassword) {
			$this->flashMessage('Nemáte správně vyplněné heslo!');
		} else {
			
			$password = $this->md5HashPass($form->values->password, $form->values->email);
			
			$this->context->userRepository->insert($form->values->username, $form->values->firstname, $form->values->lastname,
					$form->values->email, $password);
			$this->flashMessage('Registrace proběhla úspěšně');
		}
		$this->redirect('this');
	}
	
	
}