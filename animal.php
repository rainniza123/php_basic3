<?php
class Animal {
public $name;
public $legs;
public $cold_blooded;
public $leg;

public function getName()
{
    return $this->name;
}
public function setName($name)
{
    $this->name = $name;
}
//pembatas
public function legs()
{
    return $this->legs=4;
}
//pembatas
public function leg()
{
    return $this->leg=2;
}
//pembatas
public function cold_blooded()
{
    return $this->cold_blooded = 'no';
}
}
?>