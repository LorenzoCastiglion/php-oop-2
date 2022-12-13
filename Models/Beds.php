<?php
include_once __DIR__ . '/Product.php';
Class Beds extends Product{

    private string $where;

    private array $material;

    private string $size;



    function __construct(string $_title, string $_image, float $_price, Category $_category, string $_where, array $_material, string $_size)
    {
        parent::__construct($_title, $_image, $_price, $_category);

        $this->setWhere($_where);
        $this->setMaterial($_material);
        $this->setSize($_size);
    }




	public function getWhere(): string {
		return $this->where;
	}


	public function setWhere(string $where): self {
		$this->where = $where;
		return $this;
	}

	public function getMaterial(): array {
		return $this->material;
	}

	public function setMaterial(array $material): self {
		$this->material = $material;
		return $this;
	}


	public function getSize(): string {
		return $this->size;
	}

	
	public function setSize(string $size): self {
		$this->size = $size;
		return $this;
	}
}




?>