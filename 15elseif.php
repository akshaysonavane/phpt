<html>
   <body>
   
      <?php
         $d = date("D");
         
         if ($d == "Fri")
            echo "Have a nice weekend!";
         
         elseif ($d == "Sun")
            echo "Have a nice Sunday!"; 
         
         else
            echo "Have a nice day!"; 
      ?>
      
   </body>
</html>