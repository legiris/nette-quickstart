<?php

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{
	/**
	 * zobrazeni bez komponenty
	 */
	public function renderDefault()
	{		
		$this->template->tasks = $this->context->taskRepository->fetchAll();	
	}
	
	
	protected function createComponentShowTasks()
	{
		// create the desired component
		//$componentShowTasks = new ShowTasksControl($this->context->taskRepository->fetchAll(), 'ShowTasks');
		
		$componentShowTasks = new ShowTasksControl($this->context->taskRepository->fetchAll(), 0, $this->context->taskRepository, 0, 0);
		
		return $componentShowTasks;
	}
	
	
}
