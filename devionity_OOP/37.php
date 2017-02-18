<?php

    class Fraction{

      public static function dec($a, $b){

        try{
          if($b ==  0){
            throw new Exception('dasds');
          }
        }catch(Exception $e){
          echo 'U diveded by zero';
        }
          echo round($a/$b, 2);
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

    Fraction::dec(20, 0);
