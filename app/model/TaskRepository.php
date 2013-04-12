<?php

class TaskRepository extends AbstractRepository
{	
	protected $column;
	
	protected $projectID;
	
	
	/**
	 * vybere vsechny ukoly a vrati je jako objekt
	 */
	public function fetchAll()
	{
		$tasks = $this->database->table('task')->order('created DESC');
		
		return $tasks;
	}
	
	
	/**
	 * vybere ukoly podle project_id
	 
	public function fetchAllByID($id)	
	{
		$tasks = $this->database->table('task')->where('project_id', $id)->order('created DESC');
		
		return $tasks;
	}*/
	

	public function insert($text,$userID,$projectID)
	{
		$result = $this->database->table('task')->insert(array(
			'text'		=> $text,
			'created' 	=> new \DateTime(),
			'user_ID'  	=> $userID,
			'project_ID'=> $projectID								
		));	
	}
	
	
	// functions for signals
	
	public function markDone($id)
	{
		$result = $this->database->table('task')->where('id', $id)->update(array(
			'done'	=> new \DateTime()	
		));	
	}
	
	
	/**
	 * vybere ukoly podle project_id a seradi je podle vybraneho sloupce
	 * @param num $projectID
	 * @param num $column
	 * @return Ambigous <\Nette\Database\Table\Selection, \Nette\Database\Table\\Nette\Database\Table\Selection>
	 */
	public function tableSort($projectID, $column)
	{
		$this->column = $column;
		
		$this->projectID = $projectID;

		
		if ($this->column < 0) {
			$order = 'ASC';
			$this->column = $this->column * (-1);
		} else {
			$order = 'DESC';
		}
		
		switch ($this->column) {
			case '1':
				$order = 'text ' . $order;
				break;
			case '2':
				$order = 'created ' . $order;
				break;
			case '3':
				$order = 'assumed ' . $order;
				break;
			case '4':
				$order = 'done ' . $order;
				break;
			case '5':
				$order = 'time ' . $order;
				break;
			case '6':
				$order = 'surname ' . $order;	// user surname
				break;
			case '7':
				$order = 'title ' . $order;		// project title
				break;
			case '8':
				$order = 'id ' . $order;	
				break;
			default:
				$order = 'created DESC';
				break;
		}
		
		// optimalizace select vs join
		if ($this->column == 6 OR $this->column == 7) {
			$result = $this->database->table('task')->select('task.*, user.surname')->where('project_id = ?', $projectID)->order($order);
		} else {
			$result = $this->database->table('task')->where('project_id', $projectID)->order($order);
		}
		
		return $result;
		
		//inner join
		//$result = $this->database->table('task')->where('user.id = task.user_id AND project_id = ?', $projectID)->order($order);
		
		//outer left join
		//$result = $this->database->table('task')->select('task.*, user.surname')->where('project_id = ?', $projectID)->order($order);
		
	}
	
}