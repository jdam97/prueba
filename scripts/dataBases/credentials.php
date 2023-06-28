<?php

abstract class credentials
{
  protected $host = "localhost";
  private $username = "campus";
  private $password = "campus2023";
  protected $bdnombre = "campuslands";

  public function __get($name)
  {
    return $this->{$name};
  }
}