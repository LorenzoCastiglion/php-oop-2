<?php
require_once __DIR__ . './../traits/weight.php';
include_once __DIR__ . '/Product.php';

class Food extends Product{

    use weight;
    
    
    private Array $ingredients;
    
    private string $exp_date;

    function __construct(string $_title, string $_image, float $_price, Category $_category, Array $_ingredients, string $exp_date = 'yyyy-mm-dd' )
    {
        parent::__construct( $_title, $_image, $_price,  $_category);
      
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


	
	public function getIngredients() {
		return $this->ingredients;
	}

	public function setIngredients($ingredients){
        if(count($ingredients)){
            $this->ingredients = $ingredients;
        } else{

            $this->ingredients = ["No food"];
        }
        
		
		return $this;
	}
}

?>
