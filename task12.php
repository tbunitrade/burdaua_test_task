<?php include_once('header.php') ?>
<div class="taskDesk task12">
    <p class="title">
        12. Write a function that prints all even values ​​from the array.
    </p>
   <?php 
    //Declaration of Object 
   $array = array(1,2,3,4,5,6,7,8,9);
   echo '<br>income: '; 
   print_r ($array);   
   $even = array();

   foreach($array as $val)
   {
       if ($val % 2 == 0) 
       {
           $even[] = $val;
       }

       else 
       {
            $odds[] = $val;            
       }
   }    

   echo '<br>' . 'Show only even value' . '<br>'; 
   print_r($even);

   foreach($even as $value) 
   {
       echo $value  . ' even value of $array : <br> ';;
   }


   
   ?>

</div>
    
</body>
</html>