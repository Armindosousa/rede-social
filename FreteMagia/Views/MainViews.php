<?php
   namespace FreteMagia\Views;

   class MainViews{
      public static function render($filename){
         include('pages/'.$filename. '.php');
      }
   }
?>