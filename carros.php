<?php

class carro {

  public $marca;
  public $modelo;
  public $ano;
  public $cor;
  public $preco;

  public function m1(){

    echo "Somos a  {$this -> marca} . <br>";


  }

  public function m2(){

    echo "Estaremos anunciando nosso novo carro, o  {$this -> modelo}, agora com a nova cor  {$this -> cor} no ano de   {$this -> ano} . <br>";


  }

  public function m3(){

    echo "O preço desse novo modelo estará na faixa de  {$this -> preco} . <br>";


  }


}
echo "Seja bem vindo a Dilser's. <br>";

echo"---------------------------------------------------------------- <br>";

$carro = new carro;

$carro->marca = "Dilser's ";
$carro->modelo ="Dilsions";
$carro->ano = 2023;
$carro->cor = "Roxo-neon";
$carro->preco = "50000";

echo $carro->m1(), "<br>";

echo"---------------------------------------------------------------- <br>";



$carro->marca = "Dilser's ";
$carro->modelo ="Dilsions";
$carro->ano = 2023;
$carro->cor = "Roxo-neon";
$carro->preco = "50000";

echo $carro->m2(), "<br>";

echo"---------------------------------------------------------------- <br>";


$carro->marca = "Dilser's ";
$carro->modelo ="Dilsions";
$carro->ano = 2023;
$carro->cor = "Roxo-neon";
$carro->preco = "50000";

echo $carro->m3(), "<br>";

echo"---------------------------------------------------------------- <br>";