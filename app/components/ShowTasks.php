<?php

class ShowTasksControl extends Nette\Application\UI\Control
{
	/** promenna bude typu @var \Nette\Database\Table\Selection */
	private $selected;
	
	private $taskTemplate;
	
	/** @var TaskRepository */
	private $taskRepository;
	
	private $orderChar;
	
	private $projectID;
	
	
	/**
	 *  @param \Nette\Database\Table\Selection $selected 
	 *	@param TaskTemplate 0 => 'ShowTasks.latte', 1 => 'ShowTasksByProject.latte'  
	 *	@param object TaskRepository
	 */
	public function __construct($selected, $taskTemplate, $taskRepository, $projectID, $orderChar)
	{
		// vzdy je potreba volat rodicovsky konstruktor (Nette\Application\UI\Control)
		parent::__construct();
		$this->selected = $selected;
		$this->taskTemplate = ($taskTemplate == 0) ? 'ShowTasks' : 'ShowTasksByProject';
		$this->taskRepository = $taskRepository;
		$this->projectID = $projectID;
		$this->orderChar = $orderChar;
	}
	
	
		
	public function render()
	{
		// sablona
		$this->template->setFile(__DIR__ . '/' . $this->taskTemplate . '.latte');
		
		// data
		$this->template->tasks = $this->selected;
		$this->template->projectID = $this->projectID;
		$this->template->orderChar = $this->orderChar;
		
		$this->template->render();
	}
	
	
	// signaly
	
	public function handleMarkDone($taskID)
	{	
		$this->taskRepository->markDone($taskID);
		
		// redirect nad presenterem, aby se stranka nedostala do historie prohlizece
		$this->presenter->redirect('this');
	}
	
	
	/**
	 * funkce pro razeni podle sloupcu
	 * @param num $projectID
	 * @param num $sort
	 */
	public function handleTableSort($projectID, $column)
	{		
		$this->taskRepository->tableSort($projectID, $column);
	}
	
	
	
	
}