<?php


use Nette\Application\UI\Form;

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
	protected function startup()
	{
		parent::startup();
		
		if ($this->getUser()->isLoggedIn()) {
			//echo "prihlasen";
		} else {
			//echo "NE";
		}
			
	}
	
	
	public function beforeRender()
	{
		$this->template->projects = $this->context->projectRepository->fetchAll();
		//$this->template->row = $this->context->authenticator  ->checkLogin('kobra', 'b');
	}	

	
	public function createComponentLoginForm()
	{
		$form = new Form();
		
		$form->addText('username', 'Login', '30', '100')->getControlPrototype()->addClass('input-login');
		$form->addPassword('password', 'Heslo', '10', '50')->getControlPrototype()->addClass('input-login');
		$form->addSubmit('login', 'Vstup')->getControlPrototype()->addClass('input-submit');
		$form->onSuccess[] = callback($this, 'loginFormSubmitted');
		//$form->onSuccess[] = $this->loginFormSubmitted();
		
		return $form;
	}
	
	
	public function loginFormSubmitted(Form $form)
	{
		try {
			$values = $form->getValues();
			
			// inicializace instance uzivatele
			$user = $this->getUser();		
			
			$user->login($values->username, $values->password);
			$this->flashMessage('Přihlášení proběhlo úspěšně.');
		
		} catch(\Nette\Security\AuthenticationException $e) {
			
			$form->addError($e->getMessage());
		}		
	}
	
	public function handleLogout()
	{
		$this->getUser()->logout();
	}
	
	
	
}
