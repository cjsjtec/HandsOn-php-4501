<?php
	class Cachorro{
		public $nome;
		public $raca;
		public $idade;
	}

	$lion = new Cachorro();
	$lion->nome  = "Lion Ze ruela / cuzão - xx - yyyyx";
	$lion->raca  = "Vira Barril - Dalmata";
	$lion->idade = 5;

	var_dump($lion);
	//echo $lion->nome."<br/>";
	//echo $lion->raca."<br/>";
	///echo $lion->idade."<br/>";
