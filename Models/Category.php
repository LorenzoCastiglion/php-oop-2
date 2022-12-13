<?php 


class Category{

    private string $species;

    private string $icon;

    function __construct(string $_species, string $_icon)
    {
        $this->setSpecies($_species);
        $this->setIcon($_icon);
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


	public function getIcon(): string {
		return $this->icon;
	}

	public function setIcon(string $icon): self {

        if(strlen($icon)){
            $this->icon = $icon;
        }else{
            $this->icon = 'default.jpg';
        }
		
		
		return $this;
	}
}



?>