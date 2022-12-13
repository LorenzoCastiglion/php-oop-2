<?php 


class Category{

    private string $species;

    function __construct(string $_species)
    {
        $this->setSpecies($_species);
    }

    


	
	public function getSpecies(): string {
		return $this->species;
	}

	public function setSpecies(string $species): self {

        if(strlen($species)){
            $this->species = $species;
        } else {
            $this->species = 'Undiscovered';
        }
		
		return $this;
	}
}



?>