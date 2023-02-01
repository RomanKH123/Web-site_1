<?php
   $name = $_POST['name'];
   $famel = $_POST['famel'];
   $other = $_POST['other'];
   $tel = $_POST['tel'];
   $itog = $_POST['itog'];
   $cash = $_POST['str'];

   $name =htmlspecialchars($name);   
   $famel =htmlspecialchars($famel);
   $other = htmlspecialchars($other);
   $tel = htmlspecialchars($tel);  
   $itog = htmlspecialchars($itog);   
   $cash = htmlspecialchars($cash);

   $name =urldecode($name);   
   $famel =urldecode($famel);
   $other = urldecode($other);
   $tel = urldecode($tel);  
   $itog = urldecode($itog);   
   $cash = urldecode($cash);
   
   $name =trim($name);   
   $famel =trim($famel);
   $other = trim($other);
   $tel = trim($tel);  
   $itog = trim($itog);   
   $cash = trim($cash);
   $ul = $name.'.txt';
   if (isset ($_POST['save']))
   {  
      $fp = fopen($ul, 'w');
      fwrite($fp, $name."\n");
      fwrite($fp, $famel."\n");
      fwrite($fp, $other."\n");
      fwrite($fp, $tel."\n");
      fwrite($fp, $itog."\n");
      fwrite($fp, $cash);
      fclose($fp);
   }
   ?>
