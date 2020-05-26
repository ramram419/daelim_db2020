<?php

function greeting($msg, $hello="hi") //매개변수
{
  echo $hello . " " . $msg . ".";
  // 문자열 결합 1 + 1 = 2 / 1 + '1'
}

//선언 -> 호출
greeting("대림", "안녕"); //인자값