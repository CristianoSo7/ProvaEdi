<?php

class Escola {

  public $turno;
  public $publica;
  public $quantia;
  public $faixaEt;
  public $diretor;

  public function m1(){

    echo "O turno das nossas aulas é  {$this -> turno} . <br>";


  }

  public function m2(){

    echo "Somos uma escola  {$this -> publica}, com  {$this -> quantia} alunos, atendemos apenas o ensino  {$this -> faixaEt} . <br>";


  }

  public function m3(){

    echo "O nosso diretor e colaborador é o Sr.  {$this -> diretor} . <br>";


  }


}
echo "Boas vindas a escola PogChamp. <br>";

echo"---------------------------------------------------------------- <br>";

$escola = new Escola;

$escola->turno = "Matutino";
$escola->publica ="Estadual";
$escola->quantia = 500;
$escola->faixaEt = "Médio";
$escola->diretor = "Edilson";

echo $escola->m1(), "<br>";

echo"---------------------------------------------------------------- <br>";



$escola->turno = "Matutino";
$escola->publica ="Estadual";
$escola->quantia = 500;
$escola->faixaEt = "Médio";
$escola->diretor = "Edilson";

echo $escola->m2(), "<br>";

echo"---------------------------------------------------------------- <br>";


$escola->turno = "Matutino";
$escola->publica ="Estadual";
$escola->quantia = 500;
$escola->faixaEt = "Médio";
$escola->diretor = "Edilson";

echo $escola->m3(), "<br>";

echo"---------------------------------------------------------------- <br>";