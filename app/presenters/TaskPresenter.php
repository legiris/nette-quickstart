<?php
/**
 * presenter, ktery zajistuje vypis seznamu ukolu
 * do url dostaneme cestu 'test.lamp/nette-quickstart/sanbdobx/www/task'
 * 
 * Signal umozni komponente ziskat od uzivatele podnet k akci. O zachyceni signalu
 * se stara presenter, ktery ho odevzda komponente, ktera je jeho prijemcem
 * 
 */

use Nette\Application\UI\Form;
//use Nette\Application\UI;

class TaskPresenter extends BasePresenter
{	
	// potrebuji ve vice fci
	protected $project;
	
	protected $projectID;
	
	protected $column;
	
	
	/**
	 * pro ziskani ID potrebuji primo property $id
	 * @param num $id
	 */	
	public function actionDefault($id)
	{			
		$this->projectID = $id;
			
		// vratim radek podle ID
		$this->template->project = $this->context->projectRepository->loadByID($this->projectID);
		if ($this->template->project === FALSE) {
			$this->setView('404');
		}
		
		// object Nette\Database\Table\ActiveRow
		// s jakym projektem pracuji
		$this->project = $this->template->project;
		
		// ulozim vysledek do promenne
	//	$this->template->tasks = $this->context->taskRepository->fetchAllByID($this->id);
	}
	
	/**
	 * 'Nejprve bych uvedl, ze rozhodne nedoporucuji predava makru {control} zadne argumenty krome nazvu komponenty...'
	 * viz: http://forum.nette.org/cs/13970-jak-predat-parametr-do-tovarnicky#p100175
	 * do komponenty potrebuji objekt taskRepository, aby ho bylo mozne vyuzit
	 */
	protected function createComponentShowTasks()
	{			
		$column = null;
		$params = $this->request->getParameters();
		
		if (isset($params['showTasks-column'])) {
			$column = $params['showTasks-column'];
		}
		
		$orderChar = ($column < 0) ? '' : '-';
		
		// create the desired component
		$componentShowTasks = new ShowTasksControl($this->context->taskRepository->tableSort($this->projectID, $column), 1, $this->context->taskRepository, $this->projectID, $orderChar);
		
		return $componentShowTasks;
	}
	
	
	
	// zpracovani formulare
	/**
	 * formular jako komponenta
	 * @return \Nette\Application\UI\Form
	 */
	public function createComponentTaskForm()
	{
		$users = $this->context->userRepository->fetchAddSelect();
		
		// zpracovani sloupcu
//		foreach ($users as $user)
// 		for ($i = 0; $i < count($users); $i++)
// 		{
// 			$user = preg_replace('/:/', ' ', $user);
// 		}
		
		$form = new Form();
		
		$form->addText('text', 'Přidat úkol:', 40, 100)->addRule(Form::FILLED, 'Zadejte text úkolu.');
		
		// $users musi byt asociativni pole	
		$form->addSelect('users','Pro: ', $users)->setPrompt('-- Vyberte -- ')->addRule(Form::FILLED, 'Vyberte, komu má být úkol přirazen.');
		
		$form->addSubmit('create', 'Vytvořit');
		
		// po uspesnem odeslani potrebuji metodu taskFormSubmitted z objektu $this, tedy z aktualniho presenteru
		//$form->onSuccess[] = callback($this, 'taskFormSubmitted');
		$form->onSuccess[] = $this->taskFormSubmitted;
		
		return $form;
	}
	
	/**
	 * vola se po uspesnem odeslani formulare
	 * @param Form $form
	 */
	public function taskFormSubmitted(Form $form)
	{
		$values = $form->getValues();

		// potrebuji ID projektu. Jak poznam, s jakym objektem pracuji? Property $project + funkce actionDefault -- do $this->project ulozim ID
		//var_dump($this->project->id); die;
		
		//var_dump($values); die;
		
		
		//$this->context->taskRepository->createTask($form->values->text);
		$this->context->taskRepository->insert($form->values->text,$form->values->users,$this->project->id);
		$this->flashMessage('Úkol přidán','success');
		
		// vratim se na aktualni stranku, jinak by se odeslany formular ulozil do historie prohlizce a mohl by se odeslat znovu /pri obnoveni stranky.../
		$this->redirect('this');
	}
	
	
}