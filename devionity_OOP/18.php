<?php

    class Test{

      public static $c = 0;

      public function __construct(){
        self::$c++;
      }

    }

    $a = new Test();
    $b = new Test();
    new Test();

    echo Test::$c;
