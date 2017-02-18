<?php

  if(!isset($_POST['cf_name'])){

    class ContactForm{

    public $name;
    public $email;
    public $message;

    }

    $cf = new ContactForm();

    $cf->name = $_POST['name'];
    $cf->email = $_POST['email'];
    $cf->message = $_POST['message'];

    var_dump($cf);



  }else{
    echo "Вы не указали имя, регистрация не прошла";
  }


 ?>
