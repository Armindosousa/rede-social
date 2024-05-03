<?php

   namespace FreteMagia\Controllers;

   class HomeController{

      public function index( ){
        
         if (isset($_SESSION['login'])){
            //Renderizar a home do usuario
            \FreteMagia\Views\MainViews::render('home');
         }else{
             //Renderizar para criar a conta.
            \FreteMagia\Views\MainViews::render('login');
         }
      }
   }
?>