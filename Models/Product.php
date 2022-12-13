<?php

include_once __DIR__ . '/Category.php';

class Product {

   protected string $title;
   protected string $image;
   protected float $price;

  public Category $category;
   

    function __construct(string $_title, string $_image, float $_price, Category $_category)
    {
      $this->setTitle($_title);
      $this->setImage($_image);
      $this->setPrice($_price);
      $this->category = $_category;
        

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
		$this->title = $title;
		return $this;
	}

	
	public function setImage(string $image): self {
		$this->image = $image;
		return $this;
	}


	public function setPrice(float $price): self {
		$this->price = $price;
		return $this;
	}
}


?>