<?php
class produtosController extends controller{

 public function index(){

$dados= array();


$this->loadTemplate('produtos',$dados);


 }




 public function linha(){

$dados= array();


$this->loadTemplate('produtos_linha',$dados);


 }


public function custo(){

$dados= array();


$this->loadTemplate('custo',$dados);


 }




public function portuaria(){

$dados= array();


$this->loadTemplate('portuaria',$dados);


 }





}