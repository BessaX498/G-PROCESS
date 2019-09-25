<?php
class scrum{
public $idproject;
public $product_owner;
public $scrum_master;
private $sprint_amount;

	/** 
    construtor
    **/
	function __construct($idproject, $product_owner, $scrum_master, $sprint_amount){
		$this->idproject = $idproject;
		$this->product_owner = $product_owner;
		$this->scrum_master = $scrum_master;
		$this->sprint_amount = $sprint_amount;
	}
  
}

?>