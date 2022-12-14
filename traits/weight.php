<?php

trait weight{

    protected $weight;   

	
	public function getWeight() {
		return $this->weight;
	}


	public function setWeight($weight, $unit): self {
		$this->weight = $weight . $unit ;
        
		return $this;
	}
}
?>