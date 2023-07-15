<?php
class Triangulo
{
	//Propiedades
	public $a;
	public $b;
	public $c;

	//Metodos
	function getExiste()
	{
		/*
		|b-c| < a < b+c
		|a-c| < b < a+c
		|b-a| < c < b+a
		*/
		$cond_1 = (abs($this->b-$this->c) < $this->a) && ($this->a < $this->b+$this->c);
		$cond_2 = (abs($this->a-$this->c) < $this->b) && ($this->b < $this->a+$this->c);
		$cond_3 = (abs($this->b-$this->a) < $this->c) && ($this->c < $this->b+$this->a);

		$condicion = $cond_1 && $cond_2 && $cond_3;

		return $condicion;

	}

	function getPerimetro()
	{
		if($this->getExiste())
		{
			$perimetro = $this->a + $this->b + $this->c;	
		}else
		{
			$perimetro = 0;
		}

		return $perimetro;		
	}

	function getArea()
	{
		/*
		area = raiz(s*(s-a)*(s-b)*(s-c))
		*/
		if($this->getExiste())
		{
			$s = $this->getPerimetro()/2;
			$area = sqrt($s*($s-$this->a)*($s-$this->b)*($s-$this->c));
		}else{
			$area = 0;
		}
		return $area;
	}

	function getTipo()
	{
		if($this->getExiste())
		{
			if(($this->a==$this->b)&&($this->b==$this->c)&&($this->a==$this->c))
			{
				$tipo = "Equilatero";
			}else if(($this->a==$this->b)||($this->b==$this->c)||($this->a==$this->c))
			{
				$tipo = "Isoceles";
			}else{
				$tipo = "Escaleno";
			}

		}else{
			$tipo = "No Existe";
		}

		return $tipo;
	}
}

?>