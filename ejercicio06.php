<?php
   $array_numerico_indexado = array( "Gato", "Perro");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }

   echo "<p>se agrega un registro nuevo<p>";

   array_push($array_numerico_indexado, 3, "Caballo");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }

   echo "<p>ejercico 2 <p>";

   $arraynumerico = array(1, 3, 2, 5, 4, 7, 6);

   //orden ascendente
   sort($arraynumerico);
   var_export($arraynumerico);

   echo "<p>";

   //orden descendente
   rsort($arraynumerico);
   var_export($arraynumerico);


   echo
?>