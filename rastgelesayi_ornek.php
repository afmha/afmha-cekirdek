<?php

  include("afmhacekirdek.php");

  if($_POST){
  
    $sayi1 = $_POST['sayi1'];
    $sayi2 = $_POST['sayi2'];
    
    rastgele($sayi1,$sayi2);
    
  }
  else
  {
    
    echo '
      <form action="" method="POST">
        1. Sayı : <input type="text" name="sayi1"><br>
        2. Sayı : <input type="text" name="sayi2"><br>
        <input type="submit" name="gonder" value="Rastgele Sayı">
      </form>
    ';
    
  }

?>
