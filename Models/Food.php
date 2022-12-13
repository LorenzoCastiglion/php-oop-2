<?php

include_once __DIR__ . '/Product.php';

class Food extends Product{

    private string $exp_date;

    private string $weight;

    private Array $ingredients;


    function __construct(string $_title, string $_image, float $_price, Category $_category, string $exp_date, int $_weight, Array $_ingredients )
    {
        parent::__construct( $_title, $_image, $_price,  $_category);
        $this->setExp_date($exp_date);
        $this->setWeight($_weight);
        $this->setIngredients($_ingredients);
    }




	public function getExp_date(): string {
		return $this->exp_date;
	}

	public function setExp_date(string $exp_date): self {
		$this->exp_date = $exp_date;
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
