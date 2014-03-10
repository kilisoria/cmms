<?php 


 class ConfigurationBase
{

 public $administrator;
 public $version;
 public $trend;
 public $server;

 public function SetTrend($value='')
 {
 	$this->trend = $value;
 }

}


 ?>