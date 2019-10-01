
<?php

spl_autoload_register(function($nomeClass) {
   
   if (file_exists($nomeClass.".php") === true) {

       require_once($nomeClass.".php");

   }


});






?>