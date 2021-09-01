<?php
//class
class mobil{
    // method 
      function property_mobil(){
          //object
          echo " Kaca , Spion , Ban , Merk";
      }
     function maju()
     {
         echo " Mobil Maju ";
     }
     function mundur()
     {
         echo " Mobil Mundur ";
     }
}

$jalan = new mobil ();

echo $jalan->property_mobil();


?>