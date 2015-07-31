<?php

  include("afmhacekirdek.php");

  if($_POST){
  
    $sayi1 = @$_POST['sayi1'];
    $sayi2 = @$_POST['sayi2'];
    
    if(empty($sayi1)){ $sayi1 = 1; }
    if(empty($sayi2)){ $sayi2 = 5; }
    
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
