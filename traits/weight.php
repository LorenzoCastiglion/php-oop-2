<?php

trait weight{

    protected $weight;   

	
	public function getWeight() {
		return $this->weight;
	}


	public function setWeight($weight, $unit){

		if($weight > 0){

			$this->weight = $weight . $unit ;

		} else{
			throw new Exception('Immateriale');
		}


	
        
		return $this->weight;
	}
}
?>