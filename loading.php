<?php

spl_autoload_register(function($name){
  echo $name . "를 로드합니다.";
  include "modules\\".$name.".php";
  // exit;
  // require $name.".php;
});