<?php

include_once __DIR__ . '/Category.php';

class Product {

   protected string $title;
   protected string $image;
   protected float $price;

  public Category $category;

  private bool $available;
   

    function __construct(string $_title, string $_image = null, float $_price, Category $_category)
    {
      $this->setTitle($_title);
      $this->setImage($_image);
      $this->setPrice($_price);
      $this->category = $_category;
        $this->setAvailable();
        

    }

 

    



	public function getTitle(): string {
		return $this->title;
	}


	public function getImage(): string {
		return $this->image;
	}


	public function getPrice(): float {

      
		return $this->price;
	}


	public function setTitle(string $title): self {
        if(strlen($title)){
            $this->title = $title;
        }else{
            $this->title = null;
        }
		
		return $this;
	}

	
	public function setImage(string $image): self {

        if(strlen($image)){
            $this->image = $image;
        }else{
            $this->image = 'default.jpg';
        }
		$this->image = $image;
		return $this;
	}


	public function setPrice(float $price): self {


        if($price > 0){
            $this->price = $price;
        }else{
            $this->price = 0;
        }
		
		return $this;
	}


	public function getAvailable(): int {
		return $this->available;
	}


	public function setAvailable(): self {

        if($this->price == 0){
            $this->available = false;
        }else{
            $this->available = true;
        }
		
		return $this;
	}
}


?>