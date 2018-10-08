<?php

class Task
{
	public $description;
	public $title;
	public $completed = FALSE;

	public function __construct($title, $description)
	{
		$this->title = $title;
		$this->description = $description;
	}

	public function complete()
	{
		$this->completed = TRUE;
	}
}

$task = new Task('Whatever', 'I/m the description');

$task->complete();

var_dump($task->title);