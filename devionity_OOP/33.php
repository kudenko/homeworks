    <?php

    interface User{

          function logout($arg);

         function login();
      }

    class CoolUser implements User{

        function login(){
          echo "i'm in";
        }

        function logout($ds){
          echo "$ds i'm logout";
        }
    }

    $user = new CoolUser();
    $user->login();
    $user->logout('test');
