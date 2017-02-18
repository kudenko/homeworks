<?php

    class Fraction{

      public static function dec($a, $b){
          if($b!=0){

            echo round($a/$b, 2);
          }
      }

        public static function sum($a, $b){
          echo ($a + $b);
        }

        public static function minus($a, $b){
          echo ($a - $b);

        }

        public static function multi($a, $b){
          echo ($a * $b);

        }
    }

    Fraction::dec(20, 13);
