<?php

include_once __DIR__ . '/Product.php';

class Food extends Product{

    
    private string $weight;
    
    private Array $ingredients;
    
    private string $exp_date;

    function __construct(string $_title, string $_image, float $_price, Category $_category, int $_weight, Array $_ingredients, string $exp_date = 'yyyy-mm-dd' )
    {
        parent::__construct( $_title, $_image, $_price,  $_category);
        $this->setWeight($_weight);
        $this->setIngredients($_ingredients);
        $this->setExp_date($exp_date);
    }




	public function getExp_date(): string {
		return $this->exp_date;
	}

	public function setExp_date(string $exp_date): self {
       $date1 = new DateTime("now");
       $date2 =  new DateTime($exp_date);
        if( $date1 <= $date2){
            $this->exp_date = $exp_date;
        }else{
            $this->exp_date = 'Scaduto';
        }
		
		return $this;
	}

	public function getWeight(): string {
		return $this->weight;
	}

	public function setWeight(string $weight): self {
		$this->weight = $weight;
		return $this;
	}

	
	public function getIngredients() {
		return $this->ingredients;
	}

	public function setIngredients($ingredients){
		$this->ingredients = $ingredients;
		return $this;
	}
}

?>
