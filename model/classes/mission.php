<?php
class mission{
public $idproject;
public $name;
public $partners;

	/** 
    construtor
    **/
	function __construct($idproject, $name, $partners){
		$this->idproject = $idproject;
		$this->name = $name;
		$this->partners = $partners;
	}
  
}

?>