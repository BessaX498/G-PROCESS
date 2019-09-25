<?php
class functionality{
public $idsprint;
public $name;
public $priority;
public $status;

	/** 
    construtor
    **/
	function __construct($idsprint, $name, $priority, $status){
		$this->idsprint = $idsprint;
		$this->name = $name;
		$this->priority = $priority;
		$this->status = $status;
	}
  
}

?>