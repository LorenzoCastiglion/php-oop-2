<?php 

include_once __DIR__ . '/Product.php';
Class Games extends Product{

    private string $size;

    private array $material;


function __construct(string $_title, string $_image, float $_price, Category $_category,string $_size, array $_material)
{       
        parent::__construct( $_title, $_image, $_price,  $_category);
        $this->setSize($_size);
        $this->setMaterial($_material);
}


	
	public function getSize(): string {
		return $this->size;
	}

	
	public function setSize(string $size): self {
		$this->size = $size;
		return $this;
	}


	public function getMaterial(): array {
		return $this->material;
	}

	public function setMaterial(array $material) {
		$this->material = $material;
		return $this;
	}
}



?>