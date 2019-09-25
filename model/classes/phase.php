<?php
class phase{
public $idproject;
public $name;
public $attachment;

	/** 
    construtor
    **/
	function __construct($idproject, $name, $attachment){
		$this->idproject = $idproject;
		$this->name = $name;
		$this->attachment = $attachment;
	}
  
}

?>