<?php
//Declarar la clase
 class Venta
{
	//Propiedades
	public $precio;
	public $cantidad;

	//Metodos
	function getTotal()
	{
		$total = $this->precio * $this->cantidad;
		return $total;
	}
	function getIgv()
	{
		$igv = 0.18*$this->getTotal();
		return $igv;
	}
	function getTotalIGV()
	{
		$TotalIGV = $this->getTotal() + $this->getIgv();
		return $TotalIGV;
	}
}
?>