<?php include_once('header.php') ?>
<div class="taskDesk task12">

    <p class="title">
        13. Write an algorithm 
        that displays random numbers from the range 0-10 until their sum is 50.
    </p>

   <?php 
        $sum = 0;
        $target = 50;        
        $array = array(); 
        echo 'My target > ' . $target . '<br> current sum = ' . $sum . '<br>';        

        function createNumber() 
        {
            $value = rand(0,10);                    
            return true;
        }
        
        function getTarget()    
        {         
            global  $sum, $target, $array;
         
            if ( $sum < $target )          
            {   
                
                $value = rand(0,10);                 
                $sum = $sum + $value;
                $array[] =  $sum ;
            }
            else 
            {   
                print_r( $array );
                echo '<br> Final sum = ' . $sum ;  
                exit();
            }  
            
            getTarget();          
        }           

        getTarget();   
   ?>
</div>
    
</body>
</html>