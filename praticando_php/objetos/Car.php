<?php


class Car {

  public $car;
  public $color;
  public $model;


  

  /**
   * Get the value of car
   */ 
  public function getCar()
  {
    return $this->car;
  }

  /**
   * Set the value of car
   *
   * @return  self
   */ 
  public function setCar($car)
  {
    $this->car = $car;

    return $this;
  }

  /**
   * Get the value of model
   */ 
  public function getModel()
  {
    return $this->model;
  }

  /**
   * Set the value of model
   *
   * @return  self
   */ 
  public function setModel($model)
  {
    $this->model = $model;

    return $this;
  }

  /**
   * Get the value of color
   */ 
  public function getColor()
  {
    return $this->color;
  }

  /**
   * Set the value of color
   *
   * @return  self
   */ 
  public function setColor($color)
  {
    $this->color = $color;

    return $this;
  }
}